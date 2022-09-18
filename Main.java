import java.util.Scanner;
import java.io.FileWriter;
import java.io.IOException;
import java.io.File;

public class Main {
    public static Scanner sc = new Scanner(System.in);
    public static String command;
    public static FileWriter file;
    public static File path = new File("./file.sql");

    public static void main(String[] args) throws IOException {
        System.out.println("Register name password product date_of_birth");
        System.out.println("Post_product product_name description");
        System.out.println("Performance");
        if (path.exists()) {
            file = new FileWriter("./file.sql", true);
        } else {
            file = new FileWriter("./file.sql");
        }
        command = sc.next();
        if (command.equalsIgnoreCase("register")) {
            System.out.println("Register name password product date_of_birth");
            String name = sc.next();
            String password = sc.next();
            String product = sc.next();
            String date_of_birth = sc.next();
            String insertParticipant = "INSERT INTO PARTICIPANTS (name, password, product, DOB) VALUES ('%s', '%s', '%s', '%s');";
            String value = String.format(insertParticipant, name, password, product, date_of_birth);
            file.write(value);
            file.close();
            System.out.println(value);
        } else if (command.equalsIgnoreCase("post_product")) {
            System.out.println("Post_product product_name description");
            String product_name = sc.next();
            String description = sc.nextLine();
            String insertProducts = "INSERT INTO PRODUCTS (name, description) VALUES ('%s', '%s');";
            String value = String.format(insertProducts, product_name, description);
            System.out.println(value);
            file.write(value);
            file.close();
        } else if (command.equalsIgnoreCase("performance")) {
            System.out.println("Your performance info.");
        }
    }
}
