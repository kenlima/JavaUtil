package com.kenlima.cihelper;

import java.io.IOException;
import java.net.URI;
import java.nio.charset.Charset;
import java.nio.file.*;
import java.util.*;
import java.util.function.Predicate;
import java.util.stream.Collectors;
import java.util.stream.Stream;

/**
 * eclipse, phpstorm 에서 CodeIgniter 사용시 editor 에서 auto complete 기능을 제공하는 helper.php 를 생성해 준다
 */
public class CiHelper {

    /**
     * admin, mng, biz, sales
     */
    public static final String TEMPLETE_TYPE = "admin";
    private static final String SOURCE_PATH = "/Users/jwlee/wemakeprice/vagrant/wmp/www/gagamel_admin";

    static Stream<Path> listFiles(Path path) {
        if (Files.isDirectory(path)) {
            try {
                return Files.list(path).flatMap(CiHelper::listFiles);
            } catch (Exception e) {
                return Stream.empty();
            }
        } else {
            return Stream.of(path);
        }
    }

    public static void main(String[] args) {
        String resourceName = "cihelper/ci_autocomplete_" + TEMPLETE_TYPE + ".php.template";
        try {
            URI uri = ClassLoader.getSystemResource(resourceName).toURI();

            String contents = Files.readAllLines(Paths.get(uri)).stream().collect(Collectors.joining("\n"));
            StringBuilder cb = new StringBuilder(contents);


            //String service = makeProperty("Service_app");
            //replaceTemplate(cb, "[SERVICE]", service);

            String model = makeProperty("Model");
            replaceTemplate(cb, "[MODEL]", model);

           /*
            String manager = makeProperty("Manager_app");
            replaceTemplate(cb, "[MANAGER]", manager);
            */
            Files.write(Paths.get("ci_autocomplete_" + TEMPLETE_TYPE + ".php"), cb.toString().getBytes());

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    private static void replaceTemplate(StringBuilder sb, String tag, String str) {
        int start = 0;
        int end = 0;
        while ((start = sb.indexOf(tag, start)) > -1) {
            end = start + tag.length() + 1;
            sb.replace(start, end, str);
            start = end;
        }
    }

    private static String makeProperty(String serviceClassName) {
        //String path = "/Users/jwlee/pdtwork/sales_admin";
        String path = "/Users/jwlee/wemakeprice/vagrant/wmp/www/gagamel_admin";

        List<ClassStruct> classes = listFiles(Paths.get(SOURCE_PATH))
                .filter(p -> isHiddenFile(p))
                .filter(p -> isClassFile(p))
                .map(p -> convertClassStruct(p))
                .collect(Collectors.toList());

        Map<String, ArrayList<String>> map = new HashMap<>();

        grouping(classes, map);

        //map.keySet().stream().forEach(s -> System.out.println(s + " : " + map.get(s)));
        //map.keySet().stream().filter(s -> map.get(s).size() == 1).forEach(s -> System.out.println(s  + " " + map.get(s)));
        map.keySet().stream().filter(s -> map.get(s).size() == 1).map(s -> map.get(s).get(0)).distinct().forEach(System.out::println);

        String content = map.keySet().stream()
                .filter(key -> containsWithIgnoreCase(map.get(key), serviceClassName))
                .map(key -> formatting(key))
                .collect(Collectors.joining("\n"));

        content = content + "\n";

        return content;
    }

    private static boolean isHiddenFile(Path p) {
        if(p.toString().indexOf(".git") > -1) {
            return false;
        }
        return true;
    }
    private static boolean isPhpFile(Path p) {
        if(p.endsWith(".php")) {
            return true;
        }
        return false;
    }

    private static void grouping(List<ClassStruct> classes, Map<String, ArrayList<String>> map) {
        for (ClassStruct cs : classes) {
            ArrayList<String> parents = new ArrayList<>();
            if (cs.getParentClassName() == null || cs.getParentClassName().equals("")) {
                continue;
            }
            parents.add(cs.getParentClassName());

            scan(classes, parents, cs.getParentClassName());
            map.put(cs.getClassName(), parents);

            /*
            if(map.containsKey(cs.getClassName())) {
                map.get(cs.getClassName()).add(cs.getParentClassName());
            }else{
                ArrayList<String> ar = new ArrayList<>();
                ar.add(cs.getParentClassName());
                map.put(cs.getClassName(), ar);
            }

            for(ClassStruct cs2 : classes) {
                if(cs.getParentClassName().equals(cs2.getClassName())) {
                    map.get(cs.getClassName()).add(cs2.getParentClassName());
                }else{
                    aaa(classes, map.get(cs.getClassName()), cs2.getParentClassName());
                }
            }
            */
        }
    }

    private static void scan(List<ClassStruct> classeStructList, ArrayList<String> parentClassNameList, String currCs) {
        for (ClassStruct cs : classeStructList) {
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

    private static boolean containsWithIgnoreCase(ArrayList<String> arr, String str) {
        for (String s : arr) {
            if(s.equalsIgnoreCase(str)) {
                return true;
            }
        }
        return false;
    }

    private static String formatting(String s) {

        StringBuilder sb = new StringBuilder(s);
        if (TEMPLETE_TYPE.equals("admin")) {

            sb.insert(0, " * @property ");
            sb.append(" $" + s);
        } else if (TEMPLETE_TYPE.equals("sales")) {
            StringBuilder sb2 = new StringBuilder(s);

            sb2.setCharAt(0, Character.toLowerCase(sb2.charAt(0)));
            sb.insert(0, " * @property ");
            sb.append(" $" + sb2.toString());
        } else {
            throw new RuntimeException("Invalid template type.");
        }

        return sb.toString();


    }

    private static boolean isClassFile(Path p) {

        try (Stream<String> lines = Files.lines(p, Charset.forName("iso8859_1"))) {
            return lines.anyMatch(s -> s.indexOf("class ") == 0);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return false;
    }

    private static ClassStruct convertClassStruct(Path p) {
        ClassStruct cs = null;

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


            cs = new ClassStruct(className, parentClassName);

        } catch (IOException e) {
            e.printStackTrace();
        }

        return cs;
    }

    private static ClassStruct convertClassStruct(String s) {
        int start = s.indexOf("class") + 5;

        int end = 0;
        String className = "";
        String parentClassName = "";
        if ((end = s.indexOf("extends", start)) > -1) {
            className = s.substring(start, end);
            start = end + 7;
            end = s.length() - 1;

            parentClassName = s.substring(start, end);
        } else {
            className = s.substring(start);
        }
        className = className.trim();
        parentClassName = parentClassName.trim();


        ClassStruct cs = new ClassStruct(className, parentClassName);
        return cs;


    }
}
