import java.util.Scanner;
import java.io.FileWriter;
import java.io.Console;
import java.io.File;
import java.io.IOException;
import java.sql.SQLException;

public class Main {
    public static Scanner sc = new Scanner(System.in);
    public static String command;
    public static FileWriter file;
    public static Console console = System.console();
    public static File path = new File("./file.sql");
    static String sName;
    static String pName;
    static String description;
    static int price;
    static int quantity;
    static String password;
    static String product;
    static String date;
    static String value;
    static String url;
    static boolean x = true;
    public static String insertS = "INSERT INTO PARTCIPANT VALUES ( '%s', '%s', '%s', '%s');\n";
    public static String insertP = "INSERT INTO PRODUCT VALUES ( '%s', '%s', '%s', '%s');\n";

    public static void main(String[] args) throws IOException, SQLException {
        while (x == true) {
            System.out.println("Press the numbers to select an option.");
            System.out.println("1. Login");
            System.out.println("2. Register");
            System.out.println("Enter 'exit' to exit.");
            command = sc.next();
            switch (command) {
                case "1":
                    System.out.println("Enter your name:");
                    sName = sc.next();
                    System.out.println("Enter your password:");
                    password = new String(console.readPassword());

                case "2":
                    System.out.println("Enter your name:");
                    sName = sc.next();
                    System.out.println("Enter your password:");
                    password = new String(console.readPassword());
                    System.out.println("Enter your product:");
                    product = sc.next();
                    System.out.println("Enter your date of birth(mm-dd-yyyy):");
                    date = sc.next();
                    value = String.format(insertS, sName, password, product, date);
                    if (path.exists() == true) {
                        file = new FileWriter("./file.sql", true);
                        file.write(value);
                        file.close();
                        System.out.println(value);
                    } else {
                        file = new FileWriter("./file.sql");
                        file.write(value);
                        file.close();
                        System.out.println(value);
                    }
                    x = false;
                    break;
                case "exit":
                    x = false;
                    break;
                default:
                    System.out.println("Invalid input!");
                    x = false;
                    break;
            }
        }
        x = true;
        while (x == true) {
            System.out.println("Press the numbers to select an option.");
            System.out.println("1. Request info.");
            System.out.println("2. Add product info.");
            System.out.println("Enter 'exit' to exit.");
            command = sc.next();
            switch (command) {
                case "1":
                    System.out.println("Your information is being fetched from the database, it will be available at ");
                    x = false;
                    break;
                case "2":
                    System.out.println("Enter the product name:");
                    pName = sc.next();
                    if (pName != product) {
                        System.out.println("Cannot enter two different products!");
                        break;
                    }
                    System.out.println("Enter the description:");
                    description = sc.next();
                    System.out.println("Enter the price:");
                    price = sc.nextInt();
                    System.out.println("Enter the quantity:");
                    quantity = sc.nextInt();
                    value = String.format(insertP, pName, description, price, quantity);
                    if (path.exists() == true) {
                        file = new FileWriter("./file.sql", true);
                        file.write(value);
                        file.close();
                        System.out.println(value);
                    } else {
                        file = new FileWriter("./file.sql");
                        file.write(value);
                        file.close();
                        System.out.println(value);
                    }
                    x = false;
                    break;
                case "exit":
                    break;
                default:
                    System.out.println("Invalid input!");
                    x = false;
                    break;
            }
        }

        System.out.println("Thank you for using!" + sName);
    }
}
