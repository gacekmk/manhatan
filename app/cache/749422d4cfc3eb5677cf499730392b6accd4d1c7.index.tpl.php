<?php /*%%SmartyHeaderCode:208894ff176035031e1-36621865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1341224382,
      2 => 'file',
    ),
    '0debd65d8a9db561a3ba3fd862046bf4e41cc1db' => 
    array (
      0 => '.\\configs\\test.conf',
      1 => 1341223033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208894ff176035031e1-36621865',
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_4ff17e04f38175_45072722',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff17e04f38175_45072722')) {function content_4ff17e04f38175_45072722($_smarty_tpl) {?>

<PRE>


<b>
Title: Welcome To Smarty!
</b>
The current date and time is 2012-07-02 12:55:00

The value of global assigned variable $SCRIPT_NAME is /wku/zz/app/index.php

Example of accessing server environment variable SERVER_NAME: localhost

The value of {$Name} is <u><b><br />
<b>Notice</b>:  Undefined index: Name in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>59</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>59</b><br />
</b></u>

variable modifier example of {$Name|upper}

<b><br />
<b>Notice</b>:  Undefined index: Name in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>64</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>64</b><br />
</b>


An example of a section loop:

<br />
<b>Notice</b>:  Undefined index: FirstName in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>72</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>72</b><br />
	none

An example of section looped key values:

<br />
<b>Notice</b>:  Undefined index: contacts in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>113</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>113</b><br />
<p>

testing strip tags
<table border=0><tr><td><A HREF="/wku/zz/app/index.php"><font color="red">This is a  test     </font></A></td></tr></table>

</PRE>

This is an example of the html_select_date function:

<form>
<select name="Date_Month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07" selected="selected">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="Date_Day">
<option value="1">01</option>
<option value="2" selected="selected">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Date_Year">
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select>
</form>

This is an example of the html_select_time function:

<form>
<select name="Time_Hour">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12" selected="selected">12</option>
</select>
<select name="Time_Minute">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55" selected="selected">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Second">
<option value="00" selected="selected">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Meridian">
<option value="am">AM</option>
<option value="pm" selected="selected">PM</option>
</select>
</form>

This is an example of the html_options function:

<form>
<select name=states>
<br />
<b>Notice</b>:  Undefined index: option_values in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>168</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>168</b><br />
<br />
<b>Notice</b>:  Undefined index: option_selected in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>168</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>168</b><br />
<br />
<b>Notice</b>:  Undefined index: option_output in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>168</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\wku\zz\app\templates_c\749422d4cfc3eb5677cf499730392b6accd4d1c7.file.index.tpl.cache.php</b> on line <b>168</b><br />

</select>
</form>


<?php }} ?>