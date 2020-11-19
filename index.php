<?php
//echo '<p>this is PHP! </p>';

if (isset($_GET{["FIrstName"])){//show feedback
echo $_GET{["FIrstName"];
}else{//show form
echo'
<form>
first Name: <input type="text" name="FIrstName" /><br />
<input type="submit" />
</form>



</form>

';

}
