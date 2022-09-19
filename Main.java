import java.util.Scanner;
import java.io.FileWriter;
import java.io.IOException;
import java.io.File;

public class Main {
    public static Scanner sc = new Scanner(System.in);
    public static String command;
    public static FileWriter file;
    public static Scanner reader;
    public static FileWriter count;
    static int num;
    public static File path = new File("./file.sql");
    public static File counterPath = new File("./counter.txt");

    public static void main(String[] args) throws IOException {
        System.out.println("Register");
        System.out.println("Performance");
        if (path.exists()) {
            file = new FileWriter("./file.sql", true);
        } else {
            file = new FileWriter("./file.sql");
        }
        if (counterPath.exists()) {
            reader = new Scanner(counterPath);
            String data = reader.nextLine();
            num = Integer.parseInt(data);
            ++num;
            count = new FileWriter("./counter.txt");
            count.write(String.format("%d", num));
            count.close();
        } else {
            count = new FileWriter("./counter.txt");
            num = 1;
            count.write(String.format("%d", num));
            count.close();
        }

        command = sc.next();
        if (command.equalsIgnoreCase("register")) {
            // Add participant
            System.out.println("Register name password product date_of_birth");
            String name = sc.next();
            String password = sc.next();
            String product = sc.next();
            String date_of_birth = sc.next();
            String insertParticipant = "INSERT INTO PARTICIPANTS (name, password, product, DOB) VALUES ('%s', '%s', '%s', '%s');\n";
            String value = String.format(insertParticipant, name, password, product, date_of_birth);
            file.write(value);
            System.out.println(value);
            // Add Product
            System.out.println("Post_product product_name description");
            String product_name = sc.next();
            String description = sc.nextLine();
            String insertProducts = "INSERT INTO PRODUCTS (ProductName, description, participantID) VALUES ('%s', '%s', "
                    + num + ");\n";
            value = String.format(insertProducts, product_name, description);
            System.out.println(value);
            file.write(value);
            file.close();
        } else if (command.equalsIgnoreCase("performance")) {
            System.out.println("Your performance info.");
        }
    }
}
