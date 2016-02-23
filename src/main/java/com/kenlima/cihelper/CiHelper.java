package com.kenlima.cihelper;

import java.io.IOException;
import java.net.URI;
import java.net.URISyntaxException;
import java.nio.file.*;
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

    public static void main(String[] args) throws IOException, URISyntaxException {
        String resourceName = "cihelper/ci_autocomplete.php.template";
        URI uri = ClassLoader.getSystemResource(resourceName).toURI();
        String contents = Files.readAllLines(Paths.get(uri)).stream().collect(Collectors.joining("\n"));
        StringBuilder cb = new StringBuilder(contents);

        //listFiles(Paths.get(path)).forEach(System.out::println);

        String service = makeProperty("s");


        replaceTemplate(cb, "[SERVICE]", service);

        String model = makeProperty("m");
        replaceTemplate(cb, "[MODEL]", model);

        String manager = makeProperty("mgr");
        replaceTemplate(cb, "[MANAGER]", manager);



        Files.write(Paths.get("ci_autocomplete.php"), cb.toString().getBytes());

        System.out.println(cb.toString());

        /*
        int idx = contents.indexOf("[SERVICE]");
        if (idx > -1) {
            cb.replace(idx, idx + 9, controller);
        }

        idx = contents.indexOf("[SERVICE]", idx + 9);


        contents = contents.replaceAll("CONTROLLER", controller);

        System.out.println(contents);
        String service = makeProperty("s");
        System.out.println(service);
        contents = contents.replaceAll("\\[SERVICE\\]", service);

        String model = makeProperty("m");
        contents = contents.replaceAll("\\[MODEL\\]", service);


        String manager = makeProperty("mgr");
        contents = contents.replaceAll("\\[MANAGER\\]", service);

        System.out.println(contents);
        */


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

    private static String makeProperty(String prefix) {
        String path = "/Users/jwlee/EclipseProjects/workspace/sales_admin";
        String content = listFiles(Paths.get(path)).filter(p -> fileFiltering(p, prefix))
                .map(p -> p.getFileName().toString())
                .distinct()
                .map(s -> formatting(s)).collect(Collectors.joining("\n"));
        content = content + "\n";
        return content;
    }

    private static String formatting(String s) {


        StringBuilder sb = new StringBuilder(s);
        sb.delete(sb.length() - 4, sb.length());
        String s2 = sb.toString();
        sb.setCharAt(0, Character.toUpperCase(sb.charAt(0)));
        sb.insert(0, " * @property ");
        sb.append(" $" + s2);


        return sb.toString();


    }

    private static boolean fileFiltering(Path p, String prefix) {
        PathMatcher matcher = FileSystems.getDefault().getPathMatcher("glob:**/" + prefix + "[A-Z]*.php");
        return matcher.matches(p);
    }

    private static boolean fileFiltering2(Path p, String prefix) throws IOException {
        Files.lines(p);
    }
}
