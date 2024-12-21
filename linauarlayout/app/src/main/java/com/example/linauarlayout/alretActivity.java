package com.example.linauarlayout;

import android.annotation.SuppressLint;
import android.content.DialogInterface;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.widget.Button;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class alretActivity extends AppCompatActivity {

        Button Btnalert;
    @SuppressLint("MissingInflatedId")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_alret);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        Btnalert=findViewById(R.id.Btnalert);

        Btnalert.setOnClickListener(v -> {
            AlertDialog.Builder builder = new AlertDialog.Builder(this);
            builder.setTitle("Exit")
                    .setMessage("Are you  Sure?")
                    .setPositiveButton("yes",(dialog, which) -> {
                        finish();
                        Toast.makeText(this, "Yes Button Clicked", Toast.LENGTH_SHORT).show();
                    })
                    .setNegativeButton("no",(dialog, which) -> {
                        Toast.makeText(this, "NO Button Clicked", Toast.LENGTH_SHORT).show();
                    })
                    .show();

        });
    }
}