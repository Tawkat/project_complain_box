package com.example.complaintbox;

import android.app.Activity;

import android.os.Bundle;
import android.view.Menu;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.app.Activity;
import android.content.Intent;

public class MainActivity extends Activity {


    @Override
    protected void onCreate(Bundle savedInstanceState) {

    	super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        WebView browser = (WebView) findViewById(R.id.webview1);
        browser.setWebViewClient(new MyBrowser());
        browser.loadUrl("http://192.168.128.1/cb/login.php");
        WebSettings webSettings = browser.getSettings();
	webSettings.setJavaScriptEnabled(true);




    }


    @Override
    // Detect when the back button is pressed
    public void onBackPressed() {
        if(webView.canGoBack()) {
            webView.goBack();
  } else {
            // Let the system handle the back button
            super.onBackPressed();
        }
    }

}
