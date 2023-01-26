<!Doctype html>
<html>
    <head>
        <title>Automobile</title>
        <link rel="stylesheet" type="text/css" href="style-2.css">
        <script src="mobile_script.js"></script>
    </head>

<body>
    <ul>
        <li><a class="active" href="">HOME</a></li>
        <li><a href="exterior_interior.html">EXTERIOR PARTS</a></li>
        <li><a href="Auto_Parts.html">AUTO PARTS</a></li>
        <li><a href="login.php">Log Out</a></li>
    </ul>
    
        <div style="margin-left:20%;padding:2px 16px;height:1000px;margin-top: 0%;">
        
        <div align="left">
            <img src="images/logo.PNG"> 
        </div>
    
        <h2 style="margin-left:250px;color: rgb(6, 71, 55);">We work on all Make and Models of Cars</h2>
        <form action="mobile.php" method="POST">
            <div style="position: relative; left: 220px;">
                <label for="vehicles">Select Make:</label>
                    <select id="vehicles" name="myvehicles" onchange="populate(this.id,'models')">
                        <option value=""></option>
                        <option value="Nissan">Nissan</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Dodge">Dodge</option>
                        <option value="BMW">BMW</option>
                        <option value="Ford">Ford</option>
                        <option value="Honda">Honda</option>
                        <option value="Audi">Audi</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Mercedes Benz">Mercedes Benz</option>
                        <option value="Alfa Romeo">Alfa Romeo</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Maserati">Maserati</option>
                        <option value="Cadillac">Cadillac</option>
                        <option value="Aston Martin">Aston Martin</option>
                        <option value="Jarguar">Jarguar</option>
                        <option value="Mini">Mini</option>
                        <option value="Tesla">Tesla</option>
                        <option id="GMC">GMC</option>
                        <option id="Jeep">Jeep</option>
                        <option id="Jeep">Lamborghini</option>  
                        <option id="Jeep">Porsche</option>   
                    </select>

                    <label for="vehicles">Select Model:</label>
                        <select id="models" name="mymodel"></select>
                           
                                            
                    <label for="vehicles">Select Year:</label>
                        <select id="year" name="year">
                            <optgroup label="2020s">
                                <option>2021</option>
                                <option>2020</option>   
                            </optgroup>

                            <optgroup label="2010s">
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                            </optgroup>

                            <optgroup label="2000s">
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                                <option>2005</option>
                                <option>2004</option>
                                <option>2003</option>
                                <option>2002</option>
                                <option>2001</option>
                                <option>2000</option>
                            <optgroup>

                            <optgroup label ="1990s">
                                <option>1999</option>
                                <option>1998</option>
                                <option>1997</option>
                                <option>1996</option>
                                <option>1995</option>
                                <option>1994</option>
                                <option>1993</option>
                                <option>1992</option>
                                <option>1991</option>
                                <option>1990</option>
                            <optgroup>

                            <optgroup label="1980s">
                                <option>1989</option>
                                <option>1988</option>
                                <option>1887</option>
                                <option>1986</option>
                                <option>1985</option>
                                <option>1984</option>
                                <option>1983</option>
                                <option>1982</option>
                                <option>1981</option>
                                <option>1980</option>
                            <optgroup>

                            <optgroup label="1970s">
                                <option>1979</option>
                                <option>1978</option>
                                <option>1977</option>
                                <option>1976</option>
                                <option>1975</option>
                                <option>1974</option>
                                <option>1973</option>
                                <option>1972</option>
                                <option>1971</option>
                                <option>1970</option>
                            </optgroup>

                            <optgroup label="1960s">
                                <option>1969</option>
                                <option>1968</option>
                                <option>1967</option>
                            </optgroup>
                    </select> 
                </form> 
            </div>
                    
                <div style="position: relative;left: 220px;">
                    <h3 style="color: rgb(6, 71, 55);">What is the problem of Your Vehicle?</h3>
                    <textarea id="code" name="info" rows="10" cols="60"></textarea>
                </div>

                <div style="position: relative;left: 220px;">
                    <h3 style="color: rgb(6, 71, 55);">How can we service your vehicle?</h3>
                    <select id="services" name="service">
                        <label for="services">Select Problem:</label>
                        <option></option>
                        <option>Engine Repair</option>
                        <option>Hybrid Battery installation</option>
                        <option>Electrical system Repair</option>
                        <option>Transmission</option>
                        <option>Factory scheduled services</option>
                        <option>Change the engine oil</option>
                        <option>Replace the oil Filter</option>
                        <option>Replace the air filter</option>
                        <option>Replace the fuel filter</option>
                        <option>Replace the cabin or a/c filter</option>
                        <option>Replace the spark plugs</option>
                        <option>Check level and refill brake fluid/clutch fluid</option>
                        <option>Check brake pads/Liner, Brake discs/drums, and replace if worn out</option>
                        <option>Check Coolant Hoses</option>
                        <option>Check the charging systems</option>
                        <option>Check the battery</option>
                        <option>Check level and refill power steering fluid</option>
                        <option>Check level and refill Automatic/Manual Transmission Fluid</option>
                        <option>Grease and lubricate components</option>
                        <option>Inspect and replace the timing belt or timing chain if needed</option>
                        <option>Check condition of the tires</option>
                        <option>Check for proper operation of all lights, wipers etc</option>
                        <option>Check for any error codes in the ECU and take corrective action</option>
                        <option>Use a scan tool to read trouble code</option> 
                    </select>          
                    </div>
                        
                    <div style="position: relative; left: 220px;">
                        <div style="padding: 20px 10px;"><input type="submit" value="Submit" name="submit_info"></div> 
                    </div>
</body>
</html>