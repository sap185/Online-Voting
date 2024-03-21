<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Submit Page</title>
    <!--     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
    <link rel="stylesheet" href="voter_register.css">
    <!-- <style type="text/css">
        .headersection{
            background: #ccc;
            width: 100%;
            padding-top: 1px;
        }
        .heading h2{
            text-align: center;
        }
    </style> -->
</head>

<body>
    <!-- <h4 align="center" style="color:purple; font: bold;"><a href ="check_yours.php">Check yourself</a></h4> -->
    <div class="container">
        <form id="myForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

            <h2 align="center" style="margin-top: 1px;">Voter Registration
                <hr>
            </h2>

            <div class="abc">
                <div class="form-group">
                    <label>VOTER ID:</label><input name="voter" placeholder="enter your Voter ID">
                </div>
                <div class="form-group">
                    <label>Name:</label><input name="name" placeholder="enter your name">
                </div>
            </div>

            <div class="abc">

                <div class="form-group">
                    <label>DOB:</label><input name="dob" type="date" placeholder="enter your Date of birth">
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="">Please select one…</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                    </select>
                    <!-- <label>Gender:</label>
                    Male<input type="radio" name="gender" value="Male">
                    Female<input type="radio" name="gender" value="Female"> 
                    others<input type="radio" name="gender" value="Other">  -->
                </div>

            </div>

            <div class="abc">
                <div class="form-group">
                    <label>Father's Name:</label><input name="father_name" placeholder="enter your Father's name">
                </div>

                <div class="form-group">
                    <label>Address:</label><input name="address" placeholder="enter your address">
                </div>

            </div>
            <div class="abc">
                <div class="form-group">
                    <label>Isssue Date:</label><input name="issue_date" type="date" placeholder="enter the issue date of your voter card">
                </div>


                <div class="form-group">
                    <label>Constitution Number:</label><select id="my-dropdown" name="cons_number">
                        <!-- <option value="" name="">Please Mention Your Constitution Number</option> -->

                        <option value="001">001</option>
                        <option value="002">002</option>
                        <option value="003">003</option>
                        <option value="004">004</option>
                        <option value="005">005</option>
                        <option value="006">006</option>
                        <option value="007">007</option>
                        <option value="008">008</option>
                        <option value="009">009</option>
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="012">012</option>
                        <option value="013">013</option>
                        <option value="014">014</option>
                        <option value="015">015</option>
                        <option value="016">016</option>
                        <option value="017">017</option>
                        <option value="018">018</option>
                        <option value="019">019</option>
                        <option value="020">020</option>
                        <option value="021">021</option>
                        <option value="022">022</option>
                        <option value="023">023</option>
                        <option value="024">024</option>
                        <option value="025">025</option>
                        <option value="026">026</option>
                        <option value="027">027</option>
                        <option value="028">028</option>
                        <option value="029">029</option>
                        <option value="030">030</option>
                        <option value="031">031</option>
                        <option value="032">032</option>
                        <option value="033">033</option>
                        <option value="034">034</option>
                        <option value="035">035</option>
                        <option value="036">036</option>
                        <option value="037">037</option>
                        <option value="038">038</option>
                        <option value="039">039</option>
                        <option value="040">040</option>
                        <option value="041">041</option>
                        <option value="042">042</option>
                        <option value="043">043</option>
                        <option value="044">044</option>
                        <option value="045">045</option>
                        <option value="046">046</option>
                        <option value="047">047</option>
                        <option value="048">048</option>
                        <option value="049">049</option>
                        <option value="050">050</option>
                        <option value="051">051</option>
                        <option value="052">052</option>
                        <option value="053">053</option>
                        <option value="054">054</option>
                        <option value="055">055</option>
                        <option value="056">056</option>
                        <option value="057">057</option>
                        <option value="058">058</option>
                        <option value="059">059</option>
                        <option value="060">060</option>
                        <option value="061">061</option>
                        <option value="062">062</option>
                        <option value="063">063</option>
                        <option value="064">064</option>
                        <option value="065">065</option>
                        <option value="066">066</option>
                        <option value="067">067</option>
                        <option value="068">068</option>
                        <option value="069">069</option>
                        <option value="070">070</option>
                        <option value="071">071</option>
                        <option value="072">072</option>
                        <option value="073">073</option>
                        <option value="074">074</option>
                        <option value="075">075</option>
                        <option value="076">076</option>
                        <option value="077">077</option>
                        <option value="078">078</option>
                        <option value="079">079</option>
                        <option value="080">080</option>
                        <option value="081">081</option>
                        <option value="082">082</option>
                        <option value="083">083</option>
                        <option value="084">084</option>
                        <option value="085">085</option>
                        <option value="086">086</option>
                        <option value="087">087</option>
                        <option value="088">088</option>
                        <option value="089">089</option>
                        <option value="090">090</option>
                        <option value="091">091</option>
                        <option value="092">092</option>
                        <option value="093">093</option>
                        <option value="094">094</option>
                        <option value="095">095</option>
                        <option value="096">096</option>
                        <option value="097">097</option>
                        <option value="098">098</option>
                        <option value="099">099</option>
                        <option value="100">100</option>
                        <option value="101">101</option>
                        <option value="102">102</option>
                        <option value="103">103</option>
                        <option value="104">104</option>
                        <option value="105">105</option>
                        <option value="106">106</option>
                        <option value="107">107</option>
                        <option value="108">108</option>
                        <option value="109">109</option>
                        <option value="110">110</option>
                        <option value="111">111</option>
                        <option value="112">112</option>
                        <option value="113">113</option>
                        <option value="114">114</option>
                        <option value="115">115</option>
                        <option value="116">116</option>
                        <option value="117">117</option>
                        <option value="118">118</option>
                        <option value="119">119</option>
                        <option value="120">120</option>
                        <option value="121">121</option>
                        <option value="122">122</option>
                        <option value="123">123</option>
                        <option value="124">124</option>
                        <option value="125">125</option>
                        <option value="126">126</option>
                        <option value="127">127</option>
                        <option value="128">128</option>
                        <option value="129">129</option>
                        <option value="130">130</option>
                        <option value="131">131</option>
                        <option value="132">132</option>
                        <option value="133">133</option>
                        <option value="134">134</option>
                        <option value="135">135</option>
                        <option value="136">136</option>
                        <option value="137">137</option>
                        <option value="138">138</option>
                        <option value="139">139</option>
                        <option value="140">140</option>
                        <option value="141">141</option>
                        <option value="142">142</option>
                        <option value="143">143</option>
                        <option value="145">145</option>
                        <option value="146">146</option>
                        <option value="147">147</option>
                        <option value="148">148</option>
                        <option value="149">149</option>
                        <option value="150">150</option>
                        <option value="151">151</option>
                        <option value="152">152</option>
                        <option value="153">153</option>
                        <option value="154">154</option>
                        <option value="155">155</option>
                        <option value="156">156</option>
                        <option value="157">157</option>
                        <option value="158">158</option>
                        <option value="159">159</option>
                        <option value="160">160</option>
                        <option value="161">161</option>
                        <option value="162">162</option>
                        <option value="163">163</option>
                        <option value="164">164</option>
                        <option value="165">165</option>
                        <option value="166">166</option>
                        <option value="167">167</option>
                        <option value="168">168</option>
                        <option value="169">169</option>
                        <option value="170">170</option>
                        <option value="171">171</option>
                        <option value="172">172</option>
                        <option value="173">173</option>
                        <option value="174">174</option>
                        <option value="175">175</option>
                        <option value="176">176</option>
                        <option value="177">177</option>
                        <option value="178">178</option>
                        <option value="179">179</option>
                        <option value="180">180</option>
                        <option value="181">181</option>
                        <option value="182">182</option>
                        <option value="183">183</option>
                        <option value="184">184</option>
                        <option value="185">185</option>
                        <option value="186">186</option>
                        <option value="187">187</option>
                        <option value="188">188</option>
                        <option value="189">189</option>
                        <option value="190">190</option>
                        <option value="191">191</option>
                        <option value="192">192</option>
                        <option value="193">193</option>
                        <option value="194">194</option>
                        <option value="195">195</option>
                        <option value="196">196</option>
                        <option value="197">197</option>
                        <option value="198">198</option>
                        <option value="199">199</option>
                        <option value="200">200</option>
                        <option value="201">201</option>
                        <option value="202">202</option>
                        <option value="203">203</option>
                        <option value="204">204</option>
                        <option value="205">205</option>
                        <option value="206">206</option>
                        <option value="207">207</option>
                        <option value="208">208</option>
                        <option value="209">209</option>
                        <option value="210">210</option>
                        <option value="211">211</option>
                        <option value="212">212</option>
                        <option value="213">213</option>
                        <option value="214">214</option>
                        <option value="215">215</option>
                        <option value="216">216</option>
                        <option value="217">217</option>
                        <option value="218">218</option>
                        <option value="219">219</option>
                        <option value="220">220</option>
                        <option value="221">221</option>
                        <option value="222">222</option>
                        <option value="223">223</option>
                        <option value="224">224</option>
                        <option value="225">225</option>
                        <option value="226">226</option>
                        <option value="227">227</option>
                        <option value="228">228</option>
                        <option value="229">229</option>
                        <option value="230">230</option>
                        <option value="231">231</option>
                        <option value="232">232</option>
                        <option value="233">233</option>
                        <option value="234">234</option>
                        <option value="235">235</option>
                        <option value="236">236</option>
                        <option value="237">237</option>
                        <option value="238">238</option>
                        <option value="239">239</option>
                        <option value="240">240</option>
                        <option value="241">241</option>
                        <option value="242">242</option>
                        <option value="243">243</option>
                        <option value="244">244</option>
                        <option value="245">245</option>
                        <option value="246">246</option>
                        <option value="247">247</option>
                        <option value="248">248</option>
                        <option value="249">249</option>
                        <option value="250">250</option>
                        <option value="251">251</option>
                        <option value="252">252</option>
                        <option value="253">253</option>
                        <option value="254">254</option>
                        <option value="255">255</option>
                        <option value="256">256</option>
                        <option value="257">257</option>
                        <option value="258">258</option>
                        <option value="259">259</option>
                        <option value="260">260</option>
                        <option value="261">261</option>
                        <option value="262">262</option>
                        <option value="263">263</option>
                        <option value="264">264</option>
                        <option value="265">265</option>
                        <option value="266">266</option>
                        <option value="267">267</option>
                        <option value="268">268</option>
                        <option value="269">269</option>
                        <option value="270">270</option>
                        <option value="271">271</option>
                        <option value="272">272</option>
                        <option value="273">273</option>
                        <option value="274">274</option>
                        <option value="275">275</option>
                        <option value="276">276</option>
                        <option value="277">277</option>
                        <option value="278">278</option>
                        <option value="279">279</option>
                        <option value="280">280</option>
                        <option value="281">281</option>
                        <option value="282">282</option>
                        <option value="283">283</option>
                        <option value="284">284</option>
                        <option value="285">285</option>
                        <option value="286">286</option>
                        <option value="287">287</option>
                        <option value="288">288</option>
                        <option value="289">289</option>
                        <option value="290">290</option>
                        <option value="291">291</option>
                        <option value="292">292</option>
                        <option value="293">293</option>
                        <option value="294">294</option>
                    </select>

                </div>

                <!-- <div class="form-group">
                    <label>Aadhaar Number:</label><input name="aadhaar" placeholder="enter your aadhaar id">
                </div> -->
            </div>
            <div class="abc">
                <div class="form-group">
                    <label>Aadhaar Number:</label><input name="aadhaar" placeholder="enter your aadhaar id">
                </div>

                <div class="form-group">
                    <label> Password:</label><input name="password" type="password" placeholder=" create your password" required>
                </div>
            </div>
            <div class="form-group">
                <label>Photo:</label> <label for="imageInput">Select an Image </label><input name="photo" type="file" id="imageInput" accept=".jpg,.jpeg" placeholder="enter your photo">
            </div>
            <br><br>

            <button class="btnsubmit" type="submit" name="submit" value="Submit">Submit</button><br><br>
            Already User?<a href="voter_login.php">Login here</a>
        </form>
    </div>
</body>

</html>

<?php

include 'connection.php';

if (isset($_POST['submit'])) {

    $voter = $_POST['voter'];
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $issue_date = $_POST['issue_date'];
    $cons_number = $_POST['cons_number'];
    $photo = $_FILES['photo'];
    $aadhaar = $_POST['aadhaar'];
    $password = $_POST['password'];


    $filename = $photo['name'];
    $filepath = $photo['tmp_name'];
    $fileerror = $photo['error'];

    $destfile = 'upload/' . $filename;

    if ($fileerror == 0) {
        move_uploaded_file($filepath, $destfile);
    }

    $sql = "select * from candidate where voter='$voter' and aadhaar='$aadhaar'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    if (!$row) {
        $insertQuery = "INSERT INTO `candidate`.`voter` (`voter`,`name`, `father_name`,`dob`,`gender`,`address`,`issue_date`,`cons_number`,`photo`,`aadhaar`,`password`) VALUES ('$voter','$name', '$father_name','$dob','$gender','$address','$issue_date','$cons_number','$destfile','$aadhaar','$password');";

        $res = mysqli_query($con, $insertQuery);

        if ($res) {
            header("location: http://localhost/oops/voter_checking.php");
            // exit();
        }
    } else {
        echo "<center>Voter already registered</center><a href='voter_checking.php'>Click here to login</a>";
    }
}
?>