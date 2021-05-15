public void linkadi(View v) {
        Uri link = Uri.parse("https://instagram.com/ugur2nd");
        Intent intent = new Intent(Intent.ACTION_VIEW,link);
        startActivity(intent);
    }
