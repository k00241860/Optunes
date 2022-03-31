/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.util.ArrayList;

/**
 *
 * @author igorh
 */
public class User {

    private String username;
    private String password;
    private String email;
    private int userID;

    public User(String username, String password, String email, int userID) {
        this.username = username;
        this.password = password;
        this.email = email;
        this.userID = userID;
    }

    public User(String username, String password, String email) {
        this.username = username;
        this.password = password;
        this.email = email;
    }

    public User() {

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

        public void print() {

        System.out.println("username " + username);
        System.out.println("email " + email);
        System.out.println("password " + password);
        System.out.println("****************************");

    }
        
            public ArrayList<User> searchUsers(String findUser) {

        UserDB userdb = new UserDB();
        return userdb.searchUsers(findUser);

    }
            
                public boolean addUser() {

        UserDB userdb = new UserDB(username,password,email);
        return userdb.addUser();
    }
}
