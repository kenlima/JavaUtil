package com.kenlima.ciautocomplete;

import java.io.IOException;
import java.net.URI;
import java.nio.charset.Charset;
import java.nio.file.*;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.stream.Collectors;
import java.util.stream.Stream;

/**
 * eclipse, phpstorm 에서 CodeIgniter 사용시 editor 에서 auto complete 기능을 제공하는 php file 을 생성해 준다
 */
public class CiAutoCompleteMain {

    /**
     * admin, mng, biz, sales
     */
    public static final String TEMPLATE_TYPE = "admin";
    private static final String SOURCE_PATH = "/Users/jwlee/wemakeprice/vagrant/wmp/www/gagamel_admin";


    public static void main(String[] args) {

        String resourceName = "ciautocomplete/ci_autocomplete_" + TEMPLATE_TYPE + ".php.template";

        try {

            CiAutoCompleteMain main = new CiAutoCompleteMain();
            URI uri = ClassLoader.getSystemResource(resourceName).toURI();

            String templateString = Files.readAllLines(Paths.get(uri)).stream().collect(Collectors.joining("\n"));
            StringBuilder templateStrBuilder = new StringBuilder(templateString);


            String model = main.makePropertyComment("Model");
            main.replaceTemplate(templateStrBuilder, "[MODEL]", model);

           /*
            String manager = makePropertyComment("Manager_app");
            replaceTemplate(cb, "[MANAGER]", manager);
            */

            Files.write(Paths.get("ci_autocomplete_" + TEMPLATE_TYPE + ".php"), templateStrBuilder.toString().getBytes());

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public static Stream<Path> listFiles(Path path) {
        if (Files.isDirectory(path)) {
            try {
                return Files.list(path).flatMap(CiAutoCompleteMain::listFiles);
            } catch (Exception e) {
                return Stream.empty();
            }
        } else {
            return Stream.of(path);
        }
    }

    public void replaceTemplate(StringBuilder sb, String tag, String str) {
        int start = 0;
        while ((start = sb.indexOf(tag, start)) > -1) {
            int end = start + tag.length() + 1;
            sb.replace(start, end, str);
            start = end;
        }
    }

    public String makePropertyComment(String classType) {

        List<ClassName> classes = listFiles(Paths.get(SOURCE_PATH))
                .filter(p -> !isGitProperty(p))
                .filter(p -> isClass(p))
                .filter(p -> isPhp(p))
                .map(p -> convertClassStruct(p))
                .collect(Collectors.toList());

        Map<String, ArrayList<String>> map = new HashMap<>();

        grouping(classes, map);

//        map.keySet().stream().forEach(s -> System.out.println(s + " : " + map.get(s)));
//        map.keySet().stream().filter(s -> map.get(s).size() == 1).forEach(s -> System.out.println(s  + " " + map.get(s)));
//        map.keySet().stream().filter(s -> map.get(s).size() == 1).map(s -> map.get(s).get(0)).distinct().forEach(System.out::println);

        String propertyComment = map.keySet().stream()
                .filter(key -> containsWithIgnoreCase(map.get(key), classType))
                .map(key -> formatting(key))
                .collect(Collectors.joining("\n"));

        // 마지막에 줄바꿈 하기 위해
        propertyComment = propertyComment + "\n";

        return propertyComment;
    }

    public boolean isGitProperty(Path path) {
        if (path.toString().indexOf(".git") > -1) {
            return true;
        }
        return false;
    }

    public static boolean isPhp(Path p) {
        PathMatcher matcher = FileSystems.getDefault().getPathMatcher("glob:**/*.php");
//        System.out.println(matcher.matches(p) +  " : " + p);
        return matcher.matches(p);
    }

    public void grouping(List<ClassName> classes, Map<String, ArrayList<String>> map) {
        for (ClassName cs : classes) {
            ArrayList<String> parents = new ArrayList<>();
            if (cs.getParentClassName() == null || cs.getParentClassName().equals("")) {
                continue;
            }
            parents.add(cs.getParentClassName());

            scan(classes, parents, cs.getParentClassName());

            map.put(cs.getClassName(), parents);
        }
    }

    public void scan(List<ClassName> classeStructList, ArrayList<String> parentClassNameList, String currCs) {
        for (ClassName cs : classeStructList) {
            if (cs.getParentClassName() == null || cs.getParentClassName().equals("")) {
                continue;
            }
            if (currCs.equalsIgnoreCase(cs.getClassName())) {
                if (!containsWithIgnoreCase(parentClassNameList, cs.getParentClassName())) {
                    parentClassNameList.add(cs.getParentClassName());
                }
                scan(classeStructList, parentClassNameList, cs.getParentClassName());
                return;
            }
        }
    }

    public boolean containsWithIgnoreCase(ArrayList<String> arr, String str) {
        for (String s : arr) {
            if (s.equalsIgnoreCase(str)) {
                return true;
            }
        }
        return false;
    }

    public String formatting(String className) {

        StringBuilder sb = new StringBuilder(className);
        if (TEMPLATE_TYPE.equals("admin")) {
            sb.insert(0, " * @property ");
            sb.append(" $" + className);
        } else if (TEMPLATE_TYPE.equals("sales")) {
            StringBuilder sb2 = new StringBuilder(className);
            sb2.setCharAt(0, Character.toLowerCase(sb2.charAt(0)));
            sb.insert(0, " * @property ");
            sb.append(" $" + sb2.toString());
        } else {
            throw new RuntimeException("Invalid template type.");
        }

        return sb.toString();


    }

    public boolean isClass(Path p) {

        try (Stream<String> lines = Files.lines(p, Charset.forName("iso8859_1"))) {
            return lines.anyMatch(s -> s.indexOf("class ") == 0);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return false;
    }

    public ClassName convertClassStruct(Path p) {
        ClassName cs = null;

        try (Stream<String> lines = Files.lines(p, Charset.forName("iso8859_1")).filter(s -> s.indexOf("class") == 0)) {
            String line = lines.collect(Collectors.toList()).get(0);
            String className = "";
            String parentClassName = "";

            String[] slines = line.split("\\s+");
            for (int i = 0; i < slines.length; i++) {
                if (slines[i].trim().equals("class")) {
                    className = slines[i + 1];
                } else if (slines[i].trim().equals("extends")) {
                    parentClassName = slines[i + 1];
                    parentClassName = parentClassName.replaceAll("\\{", "");

                }
            }


            cs = new ClassName(className, parentClassName);

        } catch (IOException e) {
            e.printStackTrace();
        }

        return cs;
    }

}
