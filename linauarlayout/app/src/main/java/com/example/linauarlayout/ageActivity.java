package com.example.linauarlayout;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class ageActivity extends AppCompatActivity {

    EditText etname;

    TextView tvname;
    Button  btnclick;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_age);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
            tvname.findViewById(R.id.Txtage);
            etname.findViewById(R.id.Txtage);
            btnclick.findViewById(R.id.Btnage);

            btnclick.setOnClickListener(V -> {
                String age=etname.getText().toString();
                tvname.setText("The Age Is "+age);
            });

    }
}