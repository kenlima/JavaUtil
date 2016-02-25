package com.kenlima.cihelper;

import java.io.IOException;
import java.net.URI;
import java.net.URISyntaxException;
import java.nio.charset.Charset;
import java.nio.charset.CharsetEncoder;
import java.nio.file.*;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.stream.Collectors;
import java.util.stream.Stream;

/**
 * eclipse, phpstorm 에서 CodeIgniter 사용시 editor 에서 auto complete 기능을 제공하는 helper.php 를 생성해 준다
 */
public class CiHelper {

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
        String resourceName = "cihelper/ci_autocomplete.php.template";
        try {
            URI uri = ClassLoader.getSystemResource(resourceName).toURI();

            String contents = Files.readAllLines(Paths.get(uri)).stream().collect(Collectors.joining("\n"));
            StringBuilder cb = new StringBuilder(contents);


            //String service = makeProperty("Service_app");
            //replaceTemplate(cb, "[SERVICE]", service);

            String model = makeProperty("CI_Model");
            replaceTemplate(cb, "[MODEL]", model);

            //String manager = makeProperty("Manager_app");
            //replaceTemplate(cb, "[MANAGER]", manager);
            contents = Files.readAllLines(Paths.get(uri)).stream().collect(Collectors.joining("\n"));
            Files.write(Paths.get("ci_autocomplete.php"),cb.toString().getBytes());

            System.out.println(cb.toString());
        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    private static void replaceTemplate(StringBuilder sb, String tag, String str) {
        int start = 0;
        int end = 0;
        while ((start = sb.indexOf(tag, start)) > -1) {
            System.out.println("=======" + start);
            end = start + tag.length() + 1;
            sb.replace(start, end, str);
            start = end;
        }
    }

    private static String makeProperty(String serviceType) {
        //String path = "/Users/jwlee/pdtwork/sales_admin";
        String path = "/Users/jwlee/wemakeprice/vagrant/wmp/www/gagamel_admin";
        List<Path> list = listFiles(Paths.get(path)).filter(p -> fileFiltering2(p)).collect(Collectors.toList());
        List<ClassStruct> classes = list.stream().map(p -> convertClassStruct(p)).collect(Collectors.toList());


        Map<String, ArrayList<String>> map = new HashMap<>();

        groupClasses(classes, map);


        for (String key : map.keySet()) {
            System.out.println(key + " : " + map.get(key));
        }

        String content = map.keySet().stream()
                .filter(key -> map.get(key).contains(serviceType))
                .map(key -> formatting(key))
                .collect(Collectors.joining("\n"));
        return content;
    }

    private static void groupClasses(List<ClassStruct> classes, Map<String, ArrayList<String>> map) {
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

    private static void scan(List<ClassStruct> classes, ArrayList<String> parents, String currCs) {
        for (ClassStruct cs : classes) {
            if (cs.getParentClassName() == null || cs.getParentClassName().equals("")) {
                continue;
            }
            if (currCs.equals(cs.getClassName())) {
                if (!parents.contains(cs.getParentClassName())) {
                    parents.add(cs.getParentClassName());
                }
                scan(classes, parents, cs.getParentClassName());
                return;
            }
        }
    }

    private static void aaa(List<ClassStruct> classes, ArrayList<String> strings, String parentClassName) {
        for (ClassStruct cs : classes) {
            if (cs.getClassName().equals(parentClassName)) {
                strings.add(cs.getParentClassName());
            } else {
                aaa(classes, strings, parentClassName);
            }
        }
    }

    private static String formatting(String s) {


        StringBuilder sb = new StringBuilder(s);
        StringBuilder sb2 = new StringBuilder(s);

        sb2.setCharAt(0, Character.toLowerCase(sb2.charAt(0)));
        sb.insert(0, " * @property ");
        sb.append(" $" + sb2.toString());


        return sb.toString();


    }

    private static boolean fileFiltering(Path p, String prefix) {
        PathMatcher matcher = FileSystems.getDefault().getPathMatcher("glob:**/" + prefix + "[A-Z]*.php");
        return matcher.matches(p);
    }

    private static boolean fileFiltering2(Path p) {

        try (Stream<String> lines = Files.lines(p, Charset.forName("iso8859_1"))) {
            return lines.anyMatch(s -> s.indexOf("class") == 0);
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


            String[] slines = line.split(" ");
            for (int i = 0; i < slines.length; i++) {
                if (slines[i].trim().equals("class")) {
                    className = slines[i + 1];
                } else if (slines[i].trim().equals("extends")) {
                    parentClassName = slines[i + 1];

                }
            }


            cs = new ClassStruct(className, parentClassName);
            System.out.println(cs);

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

        //System.out.println("class : " + className + ", pclass : " + parentClassName);


        ClassStruct cs = new ClassStruct(className, parentClassName);
        System.out.println(cs);
        return cs;


    }
}
