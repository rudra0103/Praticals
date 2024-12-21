package com.example.linauarlayout;

import android.annotation.SuppressLint;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class nameActivity extends AppCompatActivity {

    EditText etname;

    TextView tvname;
    Button btnclick;


    @SuppressLint("SetTextI18n")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_name);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        // code Start here

        tvname=findViewById(R.id.Txtename);
        btnclick=findViewById(R.id.Btnclick);
        etname=findViewById(R.id.Etname);

        btnclick.setOnClickListener(v -> {
            String name=etname.getText().toString();
            tvname.setText("the name is " +name);
        });
    }
}