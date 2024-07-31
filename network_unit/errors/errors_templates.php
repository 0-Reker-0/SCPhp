<?php
class errors_templates_net
{
    protected static string $no_data = "<p class = 'error'>Net unit error: The importing data can't be null or empty.</p>";
    protected static string $no_set_href = "<p class = 'error'>Net unit error: Nead add location ehere nead send data.</p>";
    protected static string $type_error = "<p class = 'error'>Net unit error: The type can be one of the default method.</p>";
    protected static string $no_input_data = "<p class = 'error'>Net unit error: Using fast query need take new data, or have initialased class. Chek you sintax.</p>";
    protected static string $href_false = "<p class = 'error'>Net unit error: The location to send can be location, and the end of string nead have one of the type.</p>";
    protected static function send_err(string $err):string
    {
        return "<p class = 'error'>Called error: ".$err."</p>";
    }
}