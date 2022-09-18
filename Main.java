import java.util.Scanner;

import javax.smartcardio.CommandAPDU;

import java.io.FileWriter;
import java.io.Console;
import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Date;
import java.util.InputMismatchException;

public class Main {
    public static Scanner sc = new Scanner(System.in);
    public static String command;
    public static FileWriter file;
    public static Console console = System.console();
    public static File path = new File("./file.sql");
    int n = 1;

    public String[] makeNewList(String[] _list, String x) {
        if (_list.length <= 0) {
            newList = new String[x];
            newList[obj.n - 1] = obj.value;
        }
        return new String[x];
    }

    public static void main(String[] args) throws IOException, InputMismatchException {
        System.out.println("Register name password product date_of_birth");
        System.out.println("Post_product product_name description");
        System.out.println("Performance");
        command = sc.next();
        if (command.equalsIgnoreCase("register")) {
            System.out.println("Register name password product date_of_birth");
            String name = sc.next();
            String password = sc.next();
            String product = sc.next();
            String date_of_birth = sc.next();
            String insertParticipant = "INSERT INTO PARTICIPANTS (name, password, product, date_of_birth) VALUES (%s, %s, %s, %s);";
            String value = String.format(insertParticipant, name, password, product, date_of_birth);
            System.out.println(value);
        } else if (command.equalsIgnoreCase("post_product")) {
            System.out.println("Post_product product_name description");
            String product_name = sc.next();
            String description = sc.nextLine();
            String insertProducts = "INSERT INTO PRODUCTS (name, description) VALUES (%s, %s);";
            String value = String.format(insertProducts, product_name, description);
            System.out.println(value);
        } else if (command.equalsIgnoreCase("performance")) {
            System.out.println("Your performance info.");
        }
    }
}
