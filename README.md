## PHP Reverse String Function

We can also reverse a string using recursion and substr() function. The substr() function is used to get a substring of the original string. 
Here we have defined a function Reverse() with the string passed as argument. During every recursive call, we have used the substr() method to extract the first character of argument string and called the Reverse() function again by passing remaining part of string as argument and concatenated the first character at the end of the string returned from current call.

## Screenshot

![Screenshot 2024-08-20 131642](https://github.com/user-attachments/assets/e172dc5f-e977-4cef-81e9-c57802822be3)
