# CSV

Write PHP code that can read data from a large CSV file. The CSV file has headers with two
        columns: "label", and "value." Then each row has a label (string) and a value (float). The csv could
        have multiple instances of the same label. The script should read from the CSV file and aggregate
        the value per label, ie. it should output a CSV with one row per label showing the sum of the values.
