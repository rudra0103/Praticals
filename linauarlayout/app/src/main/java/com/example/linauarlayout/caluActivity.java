package com.example.linauarlayout;

import android.os.Bundle;
import android.text.TextUtils;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class caluActivity extends AppCompatActivity {
    EditText etno1,etno2;
    Button btnPlus,btnmienus,btnmul,btndivie,btnNext;
    TextView tvResult;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_calu);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        btnPlus=findViewById(R.id.btnplus);
        btnmienus=findViewById(R.id.btnmienus);
        btnmul=findViewById(R.id.btnmul);
        btndivie=findViewById(R.id.btndivie);
        etno1=findViewById(R.id.Etno1);
        etno2=findViewById(R.id.Etno2);
        btnNext=findViewById(R.id.btnNext);
        tvResult=findViewById(R.id.tvResult);

        btnPlus.setOnClickListener(v -> {
            String strno1=etno1.getText().toString();
            String strno2=etno2.getText().toString();

            if (TextUtils.isEmpty(strno1)){
                Toast.makeText(this, "plase enter no1", Toast.LENGTH_SHORT).show();
                etno1.setError("please Enter no1 ");
            } else if (TextUtils.isEmpty(strno2)) {
                Toast.makeText(this, "enter no2", Toast.LENGTH_SHORT).show();
                etno2.setError("enter no2");
            }else {
                int i=Integer.parseInt(strno1);
                int j=Integer.parseInt(strno2);
                int result= i+j;
                tvResult.setText(result+"");
            }
        });
        btnmienus.setOnClickListener(v -> {
            String strno1=etno1.getText().toString();
            String strno2=etno2.getText().toString();

            if (TextUtils.isEmpty(strno1)){
                Toast.makeText(this, "Plase Enter the no1", Toast.LENGTH_SHORT).show();
                etno1.setError("Plase Enter the no1");
            } else if (TextUtils.isEmpty(strno2)) {
                Toast.makeText(this, "Enter the no2", Toast.LENGTH_SHORT).show();
                etno2.setError("Enter the No2");
            }else {
                int i=Integer.parseInt(strno1);
                int j=Integer.parseInt(strno2);
                int result=i- j;
                tvResult.setText(result+"");
            }

        });
        btnmul.setOnClickListener(v -> {
            String strno1 = etno1.getText().toString();
            String strno2 = etno2.getText().toString();

            if (TextUtils.isEmpty(strno1)){
                Toast.makeText(this, "Plase Enter the no1", Toast.LENGTH_SHORT).show();
            etno1.setError("plase entter no1");

        } else if (TextUtils.isEmpty(strno2)) {
                Toast.makeText(this, "plase Enter the no2", Toast.LENGTH_SHORT).show();
                etno2.setError("enter the no2");
            }else {
                int i=Integer.parseInt(strno1);
                int j=Integer.parseInt(strno2);
                int result=i*j;
                tvResult.setText(result+"");
            }
        });

        btndivie.setOnClickListener(v -> {
            String strno1 =etno1.getText().toString();
            String strno2 =etno2.getText().toString();

            if (TextUtils.isEmpty(strno1)){
                Toast.makeText(this, "Plase enter the no1", Toast.LENGTH_SHORT).show();
                etno1.setError("Enter the no1");
            } else if (TextUtils.isEmpty(strno2)) {
                Toast.makeText(this, "Plase enter the no2", Toast.LENGTH_SHORT).show();
                etno2.setError("Enter the no2");
            }else {
                int i=Integer.parseInt(strno1);
                int j=Integer.parseInt(strno2);
                int result=i/j;
                tvResult.setText(result+"");
            }

        });
    }
}