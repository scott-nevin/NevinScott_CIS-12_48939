
                   Super Simple Survey
                   by Aaron Colman, 2004

I've always wanted an easy way to do flexible, custom 
surveys without having to setup a complex mySQL front end.
Therefore, this script was born.

The goal is to allow you to create simple, flexible
form-based surveys with little to no work (or coding).
Some PHP knowledge is helpful, HTML definately is 
useful if you want something outside of the default
template pages.

The way I accomplished this was to use a set of
variables and create a form from them. 

This is all centered around 2 arrays, $question
and $hidden. The $question array holds the question
data, the $hidden array holds a set of hidden values
that you can pass back to yourself. 

The $hidden array could be extremely useful if there's
some kind of back end coding that you're trying to connect
with (like a customer ID or something). Really it's just
there for flexibility.

There's an additional variable, $button_text, that let's
you customize the text of the button.

The $question array is the meat of the form. Basically it's
a 2 or 3 dim array that looks like this:

$question['questionnum']['type'] = 'text';
$question['questionnum']['desc'] = 'Test Text';
$question['questionnum']['deft'] = 'Blah';
$question['questionnum']['opts']['maxl'] = '30';
$question['questionnum']['opts']['size'] = '10';

Questionnum should be a number usually, but you
can probably (haven't tested it, but it should work)
use anything that would qualify for an array key...
so any short string of text would do as well.

Type is the type of form item, from the bottom list.
Desc, or Description, is the line of text before the
form element is printed. This is where you'd want to
put the actual question. HTML code is fine here so if 
you want to use CSS or HTML to change the way it looks
then go right ahead.

Deft, or default, is the default option. It means
different things depending on the type you use,
like a checkbox should just be Y or N depending on
if you want it checked by default. For radio button
arrays or select pulldowns it's the number (starting
at 1, not 0) of the option item that should be chosen
by default. For text and textarea, it's the default
value in the text field.

Opts is the options array or the options settings.
In text-based fields it's the size. For text, it's
maxlength and the field size. For textarea it's rows
and columns. For select and radio it's an array of 
options. The key can be anything, altho numbers make
more sense to make it easier to choose a default...
but the array key isn't used other than to reference
things. The array element value is what's important
as it's the value of the option itself.

One note about check boxes, if they aren't checked
then the data simply isn't sent to the processor.
This means that you only get the response IF they
check the box. Remember this when planning you forms.

The rest is self explanatory. You need to set afew
variables. 

$email_to_send_to 
Needs to be set to the email address you're going
to use.

$name_of_survey
Is the name of the survey.

$open_template, $close_template, $survey_heading_page,$survey_complete_page
Are the template files. Read the instructions in survey.php
for more info.

And if you want to change the character set, you can
do so with the $charset variable.

-------------------------------------------------

Quick reference:

Type: checkbox
Deft: Y or N for default check.

Type: radio
Deft: Default selected option
Opts: Array of option values

Type: select
Deft: Default selected option
Opts: Array of option values

Type: text
Deft: Default field text
Opts: maxl, size - Maxlength and field size

Type: textarea
Deft: Default textarea field text
Opts: rows, cols - row size, column size

-------------------------------------------------
 