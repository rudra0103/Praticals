package com.example.linauarlayout;

import android.annotation.SuppressLint;
import android.os.Bundle;
import android.widget.Button;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class TostActivity extends AppCompatActivity {

    Button btn;
    Button btn_name;
    @SuppressLint("MissingInflatedId")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_tost);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        btn = findViewById(R.id.btntost);
        btn_name = findViewById(R.id. btn_name);
        btn.setOnClickListener(View -> {
            Toast.makeText(this, "Button Clicked", Toast.LENGTH_SHORT).show();


        });
        btn_name.setOnClickListener(view ->{
            Toast.makeText(this, "Rudra", Toast.LENGTH_SHORT).show();
        } );
    }
}