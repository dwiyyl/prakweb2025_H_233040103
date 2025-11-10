/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package id.ac.unpas.pp2_c_233040103.modul05;

/**
 *
 * @author Dwi Yulianti
 */
public class NewClass {
 public String konversiNilai(int score) {
    if (score < 0 || score > 100) {
        return "Invalid";
    } else if (score >= 80) {
        return "A";
    } else if (score >= 70) {
        return "B";
    } else if (score >= 60) {
        return "C";
    } else if (score >= 50) {
        return "D";
    } else {
        return "E";
    }
}   
}
