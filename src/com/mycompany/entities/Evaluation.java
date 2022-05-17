/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;

/**
 *
 * @author Home
 */
public class Evaluation {
    private int id;

        private double  note;
private Eventl c;

    public Evaluation(double note, Eventl c) {
        this.note = note;
        this.c = c;
    }

    public Evaluation(int id, double note, Eventl c) {
        this.id = id;
        this.note = note;
        this.c = c;
    }

    

    public Eventl getC() {
        return c;
    }

    public void setC(Eventl c) {
        this.c = c;
    }

   
    public Evaluation() {
    }

    @Override
    public String toString() {
        return "Evaluation{" + "id=" + id + ", note=" + note + ", c=" + c + '}';
    }

    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }





    public double getNote() {
        return note;
    }

    public void setNote(double note) {
        this.note = note;
    }

 

    
}
