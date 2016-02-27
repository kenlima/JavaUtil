import com.kenlima.ciautocomplete.CiAutoCompleteMain;
import org.junit.Test;

import java.nio.file.Path;
import java.nio.file.Paths;

/**
 * Created by jwlee on 2016. 2. 27..
 */
public class CiAutoComplateMainTest {

    @Test
    public void test_isPhp() throws Exception {
        CiAutoCompleteMain main = new CiAutoCompleteMain();

        Path p = Paths.get(".git");
        System.out.println(main.isGitProperty(p));
    }
}
