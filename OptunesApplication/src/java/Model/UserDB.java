/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

/**
 *
 * @author igorh
 */
public class UserDB {

    private String username;
    private String password;
    private String email;
    private int userID;

    public UserDB(String username, String password, String email, int userID) {
        this.username = username;
        this.password = password;
        this.email = email;
        this.userID = userID;
    }

    public UserDB(String username, String password, String email) {
        this.username = username;
        this.password = password;
        this.email = email;
    }

    public UserDB() {
        
    }
    
    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public int getUserID() {
        return userID;
    }

    public void setUserID(int userID) {
        this.userID = userID;
    }
    
    public ArrayList<User> searchUsers(String findUser) {

        System.out.println(" find all gallery pieces");
        ArrayList<User> allUsers = new ArrayList<User>();

        Connection c = DatabaseHelper.getConnection();

        //String template = "SELECT * FROM gallerypiece;";
        
        String template = "SELECT user.username, user.email, gallerypiece.password, gallerypiece.Tags, student.Course \n"
                + "From user \n"
                + "JOIN student \n"
                + "ON gallerypiece.StudentID = student.StudentID \n"
                + "WHERE student.Course = ?";


        if (c != null) {
            try {
                PreparedStatement inserter = c.prepareStatement(template);
                inserter.setString(1, findUser);
                ResultSet resultSet = inserter.executeQuery();

                while (resultSet.next()) {                  
                    User user = new User();
                    
                    user.setUsername(resultSet.getString("username"));
                    user.setPassword(resultSet.getString("password"));
                    user.setEmail(resultSet.getString("email"));
 

                    allUsers.add(user);

                }

                System.out.println(inserter);
                inserter.close();
                c.close();
            } catch (SQLException ex) {
                System.out.println("Error on find all " + ex);
            }

        }
        return allUsers;
    }
    
    
    public boolean addUser() {
        //   boolean inserted = false;

        Connection c = DatabaseHelper.getConnection();
        String template = "INSERT INTO user (username,password,email) VALUES (?,?,?)";
        System.out.println("in model adding user");
        if (c != null) {
            try {
                PreparedStatement inserter = c.prepareStatement(template);
                inserter.setString(1, this.username);
                inserter.setString(2, this.password);
                inserter.setString(3, this.email);



                int i = inserter.executeUpdate();
                return true;
            } catch (SQLException ex) {
                System.out.println("Error on find all " + ex);
                return false;
            }

        }
        return true;
    }
}
