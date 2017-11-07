<?php
	require("header.html");
	require("nav.html");
?>
<form id="insertForm">
    <div>
      <label for="qId">ID</label>
      <input type="text" id="qId" name="questionID" />
    </div>
    <div>
      <label for="correctAnswer">Correct Answer</label>
      <input type="text" id="correctAnswer" name="cAns" />
    </div>
    <div>
      <label for="pValue">Point Value</label>
      <select id="pValue" name="pointValue">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
    </div>
		<div>
      <label for="qType">Question Type</label>
      <select id="qType" name="questionType">
        <option value="RB">Radio Button</option>
        <option value="SA">Short Answer</option>
        <option value="checkbox">Checkbox</option>
        <option value="TF">True/False</option>
      </select>
    </div>
    <div>
      <label for="kWord">Key Word(s)</label>
      <input type="text" id="kWord" name="keyWord" />
    </div>
    <div>
      <label for="sNum">Section Number</label>
      <input type="text" id="sNum" name="sectionNumber" />
    </div>
    <div>
      <label for="cNum"># of Correct Answers</label>
      <select id="cNum" name="correctNum">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
    <div class="submitButton">
      <input type="submit" value="Insert"/>
    </div>
  </form>
  <div>
  	<p class="qList">Q5</p>
  		<a class="qActivate" href="activated.php">Activate</a>
  		<a class="qEdit" href="">Edit</a>
			<a class="qDelete" href="">Delete</a>
  </div>
	<div>
  	<p class="qList">Q4</p>
  		<a class="qActivate" href="activated.php">Activate</a>
  		<a class="qEdit" href="">Edit</a>
			<a class="qDelete" href="">Delete</a>
  </div>
	<div>
  	<p class="qList">Q3</p>
  		<a class="qActivate" href="activated.php">Activate</a>
  		<a class="qEdit" href="">Edit</a>
			<a class="qDelete" href="">Delete</a>
  </div>
	<div>
  	<p class="qList">Q2</p>
  		<a class="qActivate" href="activated.php">Activate</a>
  		<a class="qEdit" href="">Edit</a>
			<a class="qDelete" href="">Delete</a>
  </div>
	<div>
  	<p class="qList">Q1</p>
  		<a class="qActivate" href="activated.php">Activate</a>
  		<a class="qEdit" href="">Edit</a>
			<a class="qDelete" href="">Delete</a>
  </div>
<?php
	require("footer.html");
?>
