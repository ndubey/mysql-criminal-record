<html>
<head>
	<title>People & Crimnal DATABASE</title>
</head>
<body bgcolor="#BBBBBB">
<h1 align="center">People & Crimnal DATABASE</h1>
<p align="center">
<b>Add <a href="addPerson.php">Person</a>&nbsp;|&nbsp;<a href="addCrime.php">Crime</a>&nbsp;|&nbsp;<a href="addCrimeScene.php">CrimeScene</a></b>
<br>
<b>Update <a href="editPerson.php">Person</a>&nbsp;|&nbsp;<a href="editCrimeScene.php">CrimeScene</a></b> 
</p>
<p align = "center">Please Provide as much information as you can to get relevant search result.Please Leave blank for those fields you don't know</p>
<table align="center" >

<tr align="center"><form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<p>First Name:

    <input name="First_Name" type="text" id="First_Name">
Last Name:

    <input name="Last_Name" type="text" id="Last_Name">
    <br><br>



Gender:
 
        <select name="Gender">
    	<option value="0" <?php if (empty($Gender)) echo "selected"; ?>>- select -</option>
<option value= "Male">Male</option>
<option value = "Female">Female</option>
</select>  
<br><br>






Nationality:

<select name="NatinalityID">
    	<option value="0" <?php if (empty($Nationality)) echo "selected"; ?>>- select nationality -</option>
<option value="93">INDIA</option>
<option value="1">AFGHANISTAN</option>
<option value="2">ALBANIA</option>
<option value="3">ALGERIA</option>
<option value="4">ANDORRA</option>
<option value="5">ANGOLA</option>
<option value="6">ANGUILLA</option>
<option value="7">ANTIGUA & BARBUDA</option>
<option value="8">ARGENTINA</option>
<option value="9">ARMENIA</option>
<option value="10">ARUBA</option>
<option value="11">AUSTRALIA</option>
<option value="12">AUSTRIA</option>
<option value="13">AZERBAIJAN</option>
<option value="14">BAHAMAS</option>
<option value="15">BAHRAIN</option>
<option value="16">BANGLADESH</option>
<option value="17">BARBADOS</option>
<option value="18">BELARUS</option>
<option value="19">BELGIUM</option>
<option value="20">BELIZE</option>
<option value="21">BENIN</option>
<option value="22">BERMUDA</option>
<option value="23">BHUTAN</option>
<option value="24">BOLIVIA</option>
<option value="25">BOSNIA-HERCEGOVINA</option>
<option value="26">BOTSWANA</option>
<option value="27">BRAZIL</option>
<option value="28">BRITISH INDIAN OCEAN TERRITORY</option>
<option value="29">BRITISH VIRGIN ISLANDS</option>
<option value="30">BRUNEI</option>
<option value="31">BULGARIA</option>
<option value="32">BURKINA FASO</option>
<option value="33">BURUNDI</option>
<option value="34">CAMBODIA</option>
<option value="35">CAMEROON</option>
<option value="36">CANADA</option>
<option value="37">CAPE VERDE</option>
<option value="38">CAYMAN ISLANDS</option>
<option value="39">CENTRAL AFRICAN REPUBLIC</option>
<option value="40">CHAD</option>
<option value="41">CHILE</option>
<option value="42">CHINA (MAINLAND)</option>
<option value="44">CHRISTMAS ISLAND (INDIAN OCEAN)</option>
<option value="45">COCOS (KEELING) ISLANDS</option>
<option value="46">COLOMBIA</option>
<option value="47">COMOROS</option>
<option value="48">CONGO</option>
<option value="49">COOK ISLANDS</option>
<option value="50">COSTA RICA</option>
<option value="51">CROATIA</option>
<option value="52">CYPRUS</option>
<option value="53">CZECH REPUBLIC</option>
<option value="54">DENMARK</option>
<option value="55">DJIBOUTI</option>
<option value="56">DOMINICA</option>
<option value="57">DOMINICAN REPUBLIC</option>
<option value="58">ECUADOR</option>
<option value="59">EGYPT</option>
<option value="60">EL SALVADOR</option>
<option value="61">EQUATORIAL GUINEA</option>
<option value="62">ERITREA</option>
<option value="63">ESTONIA</option>
<option value="64">ETHIOPIA</option>
<option value="65">FALKLAND ISLANDS</option>
<option value="66">FAROE ISLANDS</option>
<option value="67">FIJI</option>
<option value="68">FINLAND</option>
<option value="69">FR SOUTHERN & ANTARTIC LANDS</option>
<option value="70">FRANCE</option>
<option value="71">FRENCH GUIANA</option>
<option value="72">FRENCH POLYNESIA</option>
<option value="73">GABON</option>
<option value="74">GAZA STRIP</option>
<option value="75">GEORGIA</option>
<option value="76">GERMANY</option>
<option value="77">GHANA</option>
<option value="78">GIBRALTAR</option>
<option value="79">GREECE</option>
<option value="80">GREENLAND</option>
<option value="81">GRENADA</option>
<option value="82">GUADELOUPE</option>
<option value="83">GUATEMALA</option>
<option value="84">GUINEA</option>
<option value="85">GUINEA-BISSAU</option>
<option value="86">GUYANA</option>
<option value="87">HAITI</option>
<option value="88">HEARD AND MCDONALD ISLANDS</option>
<option value="89">HONDURAS</option>
<option value="90">HONG KONG</option>
<option value="91">HUNGARY</option>
<option value="92">ICELAND</option>
<option value="93">INDIA</option>
<option value="94">INDONESIA</option>
<option value="96">ISRAEL</option>
<option value="97">ITALY</option>
<option value="98">IVORY COAST</option>
<option value="99">JAMAICA</option>
<option value="100">JAPAN</option>
<option value="101">JORDAN</option>
<option value="102">KAZAKHSTAN</option>
<option value="103">KENYA</option>
<option value="104">KIRIBATI</option>
<option value="105">KUWAIT</option>
<option value="106">KYRGYZSTAN</option>
<option value="107">LAOS</option>
<option value="108">LATVIA</option>
<option value="109">LEBANON</option>
<option value="110">LESOTHO</option>
<option value="111">LIBERIA</option>
<option value="112">LIECHTENSTEIN</option>
<option value="113">LITHUANIA</option>
<option value="114">LUXEMBOURG</option>
<option value="115">MACAO (MACAU)</option>
<option value="116">MACEDONIA (SKOPJE)</option>
<option value="117">MADAGASCAR (MALAGASY)</option>
<option value="118">MALAWI</option>
<option value="119">MALAYSIA</option>
<option value="120">MALDIVES</option>
<option value="121">MALI</option>
<option value="122">MALTA AND GOZO</option>
<option value="123">MARSHALL ISLANDS</option>
<option value="124">MARTINIQUE</option>
<option value="125">MAURITANIA</option>
<option value="126">MAURITIUS</option>
<option value="127">MEXICO</option>
<option value="128">MICRONESIA, FEDERATED STATES</option>
<option value="129">MOLDOVA</option>
<option value="130">MONACO</option>
<option value="131">MONGOLIA</option>
<option value="132">MONTENEGRO</option>
<option value="133">MONTSERRAT</option>
<option value="134">MOROCCO</option>
<option value="135">MOZAMBIQUE</option>
<option value="136">MYANMAR (BURMA)</option>
<option value="137">NAMIBIA</option>
<option value="138">NAURU</option>
<option value="139">NEPAL</option>
<option value="140">NETHERLANDS</option>
<option value="141">NETHERLANDS ANTILLES</option>
<option value="142">NEW CALEDONIA</option>
<option value="143">NEW ZEALAND</option>
<option value="144">NICARAGUA</option>
<option value="145">NIGER</option>
<option value="146">NIGERIA</option>
<option value="147">NIUE</option>
<option value="148">NORFOLK ISLAND</option>
<option value="149">NORTH KOREA</option>
<option value="150">NORWAY</option>
<option value="151">OMAN</option>
<option value="152">PAKISTAN</option>
<option value="153">PALAU</option>
<option value="154">PANAMA</option>
<option value="155">PAPUA NEW GUINEA</option>
<option value="156">PARAGUAY</option>
<option value="157">PERU</option>
<option value="158">PHILIPPINES</option>
<option value="159">PITCAIRN ISLAND</option>
<option value="160">POLAND</option>
<option value="161">PORTUGAL</option>
<option value="162">PUERTO RICO</option>
<option value="163">QATAR</option>
<option value="95">REPUBLIC OF IRELAND</option>
<option value="165">REUNION (ISLAND, FRENCH)</option>
<option value="166">ROMANIA</option>
<option value="167">RUSSIA</option>
<option value="168">RWANDA</option>
<option value="169">SAN MARINO</option>
<option value="170">SAO TOME AND PRINCIPE</option>
<option value="171">SAUDI ARABIA</option>
<option value="172">SENEGAL</option>
<option value="173">SERBIA</option>
<option value="174">SEYCHELLES</option>
<option value="175">SIERRA LEONE</option>
<option value="176">SINGAPORE</option>
<option value="177">SLOVAKIA</option>
<option value="178">SLOVENIA</option>
<option value="179">SOLOMON ISLANDS</option>
<option value="180">SOMALIA</option>
<option value="164">SOUTH AFRICA, REPUBLIC OF</option>
<option value="181">SOUTH KOREA</option>
<option value="182">SPAIN</option>
<option value="183">SRI LANKA</option>
<option value="184">ST CHRISTOPHER-NEVIS</option>
<option value="185">ST HELENA</option>
<option value="186">ST LUCIA</option>
<option value="187">ST PIERRE AND MIQUELON</option>
<option value="188">ST VINCENT AND THE GRENADINE</option>
<option value="189">SURINAME</option>
<option value="190">SVALBARD AND JAN MAYEN ISLAND</option>
<option value="191">SWAZILAND</option>
<option value="192">SWEDEN</option>
<option value="193">SWITZERLAND</option>
<option value="43">TAIWAN</option>
<option value="194">TAJIKISTAN</option>
<option value="195">TANZANIA</option>
<option value="196">THAILAND</option>
<option value="197">THE GAMBIA</option>
<option value="198">TOGO</option>
<option value="199">TOKELAU ISLANDS</option>
<option value="200">TONGA</option>
<option value="201">TRINIDAD AND TOBAGO</option>
<option value="202">TUNISIA</option>
<option value="203">TURKEY</option>
<option value="204">TURKMENISTAN</option>
<option value="205">TURKS AND CAICOS ISLANDS</option>
<option value="206">TUVALU</option>
<option value="207">UGANDA</option>
<option value="208">UKRAINE</option>
<option value="209">UNITED ARAB EMPIRATES</option>
<option value="211">UNITED STATES OF AMERICA</option>
<option value="210">UNITED KINGDOM (Incl. N. Ireland)</option>
<option value="212">URUGUAY</option>
<option value="213">UZBEKISTAN</option>
<option value="214">VANUATU</option>
<option value="215">VATICAN CITY</option>
<option value="216">VENEZUELA</option>
<option value="217">VIETNAM</option>
<option value="218">VIRGIN ISLAND OF THE US</option>
<option value="219">WALLIS AND FUTUNA</option>
<option value="220">WEST BANK</option>
<option value="221">WESTERN SAHARA</option>
<option value="222">WESTERN SAMOA</option>
<option value="223">YEMEN (SANA)</option>
<option value="224">YUGOSLAVIA</option>
<option value="225">ZAIRE</option>
<option value="226">ZAMBIA</option>
<option value="227">ZIMBABWE</option>
<option value="0">Other</option>
</select>
<br/>


  <br>
<?php

  if ( $error && empty($Race) ) {

    echo '<span style="color:red">Error! Please enter Race.</span><br>',"\n";

  }

?>

  	<p>Race:

   	<input name="Race" type="text" value="<?php echo $Race; ?>">
<br>
<?php

 	if ( $error && empty($Height) ) {

    	echo '<span style="color:red">Error! Please enter Height.</span><br>',"\n";

  }
?>

  	<p>Height:

    <input name="Height" type="text" value="<?php echo $Height; ?>">
<br><br>

  	<p>Weight:

    <input name="Weight" type="text" value="<?php echo $Weight; ?>">
<br><br>
Date of Birth:

<select name="DOB">

<select name="DateOfBirth_Month">
	<option value="0" <?php if (empty($DOB)) echo "selected"; ?>> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="DateOfBirth_Day">
	<option> - Day - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
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

<select name="DateOfBirth_Year">
	<option> - Year - </option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	<option value="1904">1904</option>
	<option value="1903">1903</option>
	<option value="1902">1902</option>
	<option value="1901">1901</option>
	<option value="1900">1900</option>
</select>


<p>Occupation:

    <input name="Occupation" type="text" value="<?php echo $Occupation; ?>">
<br><br>

<p>Image information


<p>Hair Color:

    <input name="HairColor" type="text" value="<?php echo $HairColor; ?>">
<br><br>
<p>Eye Color:

    <input name="EyeColor" type="text" value="<?php echo $EyeColor; ?>">
<br><br>
<p>Any Special face mark:

    <input name="SpecialMark" type="text" value="<?php echo $SpecialMark; ?>">
<br><br>


















<td>
	<input name="search" type ="submit" value="Search">
</td></tr>
<tr><td>&nbsp;</td></tr>
</form>
</table>




<table width="900" align="center" cellpadding="0">
<tr><td><b>S.no</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>Nationality</b></td><td><b>Race</b></td><td><b>Height</b></td><td><b>Weight</b></td><td><b>Date of Birth</b></td><td><b>Occupation</b></td></tr>
<?php
include 'library/config.php';
include 'library/opendb.php';

$Search=$_POST['Search'];
$Artist=$_POST['Artist'];
$Album=$_POST['Album'];
$Year=$_POST['Year'];
$REG="[a-zA-z]*"; 
if(isset($Search)){
	$Search = $Search.$REG;
	
	    if(!empty($Rating)){
}
	if(isset($Artist)){
		$query="SELECT Songs.Title,AllGenres.GName,Artist.ArtistName,Album.AlbumName,YearofRelease,Rating  FROM Songs join Artist join Album join AllGenres WHERE Songs.ArtistId=Artist.ArtistId and Songs.AlbumId = Album.AlbumId and Songs.GenreId = AllGenres.GenreId and Artist.ArtistName REGEXP '".$Search."' ORDER BY Artist.ArtistName";
		$result=mysql_query($query);
		$i=1;

		while($list=mysql_fetch_array($result)){
			if($i%2){   $color = '#A5A5A5';} 
			else { $color = '#F5F5F5'; }
?>
			<tr  bgcolor="<?php echo$color; ?>"><td><?php echo $i; ?></td>
			<td><?php echo $list['Title']; ?> </td>	         <td><?php echo $list['GName']; ?></td>
			<td><?php echo $list['ArtistName']; ?> </td>	         <td><?php echo $list['AlbumName'];?></td>
			<td><?php echo $list['YearofRelease']; ?> </td>	         <td><?php echo $list['Rating'];?></td> 
			</tr>
<?php
			$i++;
		}	
	}else if(isset($Album)){
		$query="SELECT Songs.Title,AllGenres.GName,Artist.ArtistName,Album.AlbumName,YearofRelease,Rating  FROM Songs join Artist join Album join AllGenres WHERE Songs.ArtistId=Artist.ArtistId and Songs.AlbumId = Album.AlbumId and Songs.GenreId = AllGenres.GenreId and Album.AlbumName REGEXP '".$Search."' ORDER BY Album.AlbumName";
		$result=mysql_query($query);
		$i=1;
		while($list=mysql_fetch_array($result)){
			if($i%2){ $color = '#A5A5A5';}
			else {$color = '#F5F5F5';}
?>
			<tr  bgcolor="<?php echo$color; ?>"><td><?php echo $i; ?></td>
			<td><?php echo $list['Title']; ?> </td>	         <td><?php echo $list['GName']; ?></td>
			<td><?php echo $list['ArtistName']; ?> </td>	         <td><?php echo $list['AlbumName'];?></td>
			<td><?php echo $list['YearofRelease']; ?> </td>	         <td><?php echo $list['Rating'];?></td> 
			</tr>		
<?php
		$i++;
		}
	}else if(isset($Year)){
		$query="SELECT Songs.Title,AllGenres.GName,Artist.ArtistName,Album.AlbumName,YearofRelease,Rating  FROM Songs join Artist join Album join AllGenres WHERE Songs.ArtistId=Artist.ArtistId and Songs.AlbumId = Album.AlbumId and Songs.GenreId = AllGenres.GenreId and YearofRelease REGEXP '".$Search."' ORDER BY YearofRelease DESC";
		$result=mysql_query($query);
		$i=1;
		while($list=mysql_fetch_array($result)){
			if($i%2){ $color = '#A5A5A5';}
			else {$color = '#F5F5F5';}
?>
			<tr  bgcolor="<?php echo$color; ?>"><td><?php echo $i; ?></td>
			<td><?php echo $list['Title']; ?> </td>	         <td><?php echo $list['GName']; ?></td>
			<td><?php echo $list['ArtistName']; ?> </td>	         <td><?php echo $list['AlbumName'];?></td>
			<td><?php echo $list['YearofRelease']; ?> </td>	         <td><?php echo $list['Rating'];?></td> 
			</tr>	
<?php
			$i++;
		}
	}else {
		$query="SELECT Songs.Title,AllGenres.GName,Artist.ArtistName,Album.AlbumName,YearofRelease,Rating  FROM Songs join Artist join Album join AllGenres WHERE Songs.ArtistId=Artist.ArtistId and Songs.AlbumId = Album.AlbumId and Songs.GenreId = AllGenres.GenreId and Songs.Title REGEXP '".$Search."' ";
		$result=mysql_query($query);
		$i=1;
		while($list=mysql_fetch_array($result)){
			if($i%2){ $color = '#A5A5A5';}
			else {$color = '#F5F5F5';}
?>
			<tr  bgcolor="<?php echo$color; ?>"><td><?php echo $i; ?></td>
			<td><?php echo $list['Title']; ?> </td>	         <td><?php echo $list['GName']; ?></td>
			<td><?php echo $list['ArtistName']; ?> </td>	         <td><?php echo $list['AlbumName'];?></td>
			<td><?php echo $list['YearofRelease']; ?> </td>	         <td><?php echo $list['Rating'];?></td> 
			</tr>		
<?php
		$i++;
		}
			
	}
		
	
}	
?>
</table>
</body>
</html>
