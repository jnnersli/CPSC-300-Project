<!DOCTYPE html>
<html>
<head>
	<title>DSABC Official Judging Scoresheet</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="scoresheet.css"/>
</head>
<body>
	<header>
		<h1>DSABC Official Judging Scoresheet</h1>
	</header>
	
	<nav>
		<a href="index.php">Home</a>
		<a href="aboutpage.php">About</a>
	</nav>

	<div class="container">
		<div class="top">
			<label>Judge's Name:</label>
			<input type="text" name="judge">

			<label>Room:</label>
			<input type="text" name="room">

			<div class="round">
				<label>Round:</label>
				<input type="radio" name="round" checked> 1
				<input type="radio" name="round"> 2
				<input type="radio" name="round"> 3
				<input type="radio" name="round"> 4
				<input type="radio" name="round"> 5
			</div>

			<div class="category">
				<input type="radio" name="category" checked> Novice
				<input type="radio" name="category"> Junior
				<input type="radio" name="category"> Senior
			</div>
		</div>

		<div class="outergrid">
			<div class="innergrid">
				<div class="side item">
					1st Affirmative / 1st Proposition<br>
					<label>Name:</label>
					<input type="text" name="prop1">
				</div>

				<div class="team item">
					Team Code<br>
					<input type="text" name="propcode1" id="propcode1">
				</div>

				<div class="criteria item">Criteria</div>
				<div class="item">Poor<br>(15)</div>
				<div class="item">Weak<br>(16)</div>
				<div class="item">Avg.<br>(17)</div>
				<div class="item">Good<br>(18)</div>
				<div class="item">Great<br>(19)</div>

				<div class="item">Organization/<br>Structure</div>
				<div class="item"><input type="radio" name="prop_org_1"></div>
				<div class="item"><input type="radio" name="prop_org_1"></div>
				<div class="item"><input type="radio" name="prop_org_1"></div>
				<div class="item"><input type="radio" name="prop_org_1"></div>
				<div class="item"><input type="radio" name="prop_org_1"></div>

				<div class="item">Evidence/<br>Analysis</div>
				<div class="item"><input type="radio" name="prop_ev_1"></div>
				<div class="item"><input type="radio" name="prop_ev_1"></div>
				<div class="item"><input type="radio" name="prop_ev_1"></div>
				<div class="item"><input type="radio" name="prop_ev_1"></div>
				<div class="item"><input type="radio" name="prop_ev_1"></div>

				<div class="item">Rebuttal/<br>Clash</div>
				<div class="item"><input type="radio" name="prop_rb_1"></div>
				<div class="item"><input type="radio" name="prop_rb_1"></div>
				<div class="item"><input type="radio" name="prop_rb_1"></div>
				<div class="item"><input type="radio" name="prop_rb_1"></div>
				<div class="item"><input type="radio" name="prop_rb_1"></div>

				<div class="item">Delivery/<br>Etiquette</div>
				<div class="item"><input type="radio" name="prop_dl_1"></div>
				<div class="item"><input type="radio" name="prop_dl_1"></div>
				<div class="item"><input type="radio" name="prop_dl_1"></div>
				<div class="item"><input type="radio" name="prop_dl_1"></div>
				<div class="item"><input type="radio" name="prop_dl_1"></div>

				<div class="item">Questioning/<br>Responding</div>
				<div class="item"><input type="radio" name="prop_qu_1"></div>
				<div class="item"><input type="radio" name="prop_qu_1"></div>
				<div class="item"><input type="radio" name="prop_qu_1"></div>
				<div class="item"><input type="radio" name="prop_qu_1"></div>
				<div class="item"><input type="radio" name="prop_qu_1"></div>

				<div class="comments item">
					<label>Comments:</label>
					<textarea name="prop_com_1"></textarea>
				</div>

				<div class="item score">
					Final Score<br>(75-95)<br>
					<a id="prop_sc_1"></a>
				</div>
			</div>

			<div class="innergrid">
				<div class="side item">
					1st Negative / 1st Opposition<br>
					<label>Name:</label>
					<input type="text" name="op1">
				</div>

				<div class="team item">
					Team Code<br>
					<input type="text" name="opcode1" id="opcode1">
				</div>

				<div class="criteria item">Criteria</div>
				<div class="item">Poor<br>(15)</div>
				<div class="item">Weak<br>(16)</div>
				<div class="item">Avg.<br>(17)</div>
				<div class="item">Good<br>(18)</div>
				<div class="item">Great<br>(19)</div>

				<div class="item">Organization/<br>Structure</div>
				<div class="item"><input type="radio" name="op_org_1"></div>
				<div class="item"><input type="radio" name="op_org_1"></div>
				<div class="item"><input type="radio" name="op_org_1"></div>
				<div class="item"><input type="radio" name="op_org_1"></div>
				<div class="item"><input type="radio" name="op_org_1"></div>

				<div class="item">Evidence/<br>Analysis</div>
				<div class="item"><input type="radio" name="op_ev_1"></div>
				<div class="item"><input type="radio" name="op_ev_1"></div>
				<div class="item"><input type="radio" name="op_ev_1"></div>
				<div class="item"><input type="radio" name="op_ev_1"></div>
				<div class="item"><input type="radio" name="op_ev_1"></div>

				<div class="item">Rebuttal/<br>Clash</div>
				<div class="item"><input type="radio" name="op_rb_1"></div>
				<div class="item"><input type="radio" name="op_rb_1"></div>
				<div class="item"><input type="radio" name="op_rb_1"></div>
				<div class="item"><input type="radio" name="op_rb_1"></div>
				<div class="item"><input type="radio" name="op_rb_1"></div>

				<div class="item">Delivery/<br>Etiquette</div>
				<div class="item"><input type="radio" name="op_dl_1"></div>
				<div class="item"><input type="radio" name="op_dl_1"></div>
				<div class="item"><input type="radio" name="op_dl_1"></div>
				<div class="item"><input type="radio" name="op_dl_1"></div>
				<div class="item"><input type="radio" name="op_dl_1"></div>

				<div class="item">Questioning/<br>Responding</div>
				<div class="item"><input type="radio" name="op_qu_1"></div>
				<div class="item"><input type="radio" name="op_qu_1"></div>
				<div class="item"><input type="radio" name="op_qu_1"></div>
				<div class="item"><input type="radio" name="op_qu_1"></div>
				<div class="item"><input type="radio" name="op_qu_1"></div>

				<div class="comments item">
					<label>Comments:</label>
					<textarea name="op_com_1"></textarea>
				</div>

				<div class="item score">
					Final Score<br>(75-95)<br>
					<a id="op_sc_1"></a>
				</div>
			</div>

			<div class="innergrid">
				<div class="side item">
					2nd Affirmative / 2nd Proposition<br>
					<label>Name:</label>
					<input type="text" name="prop2">
				</div>

				<div class="team item">
					Team Code<br>
					<input type="text" name="propcode2" id="propcode2">
				</div>

				<div class="criteria item">Criteria</div>
				<div class="item">Poor<br>(15)</div>
				<div class="item">Weak<br>(16)</div>
				<div class="item">Avg.<br>(17)</div>
				<div class="item">Good<br>(18)</div>
				<div class="item">Great<br>(19)</div>

				<div class="item">Organization/<br>Structure</div>
				<div class="item"><input type="radio" name="prop_org_2"></div>
				<div class="item"><input type="radio" name="prop_org_2"></div>
				<div class="item"><input type="radio" name="prop_org_2"></div>
				<div class="item"><input type="radio" name="prop_org_2"></div>
				<div class="item"><input type="radio" name="prop_org_2"></div>

				<div class="item">Evidence/<br>Analysis</div>
				<div class="item"><input type="radio" name="prop_ev_2"></div>
				<div class="item"><input type="radio" name="prop_ev_2"></div>
				<div class="item"><input type="radio" name="prop_ev_2"></div>
				<div class="item"><input type="radio" name="prop_ev_2"></div>
				<div class="item"><input type="radio" name="prop_ev_2"></div>

				<div class="item">Rebuttal/<br>Clash</div>
				<div class="item"><input type="radio" name="prop_rb_2"></div>
				<div class="item"><input type="radio" name="prop_rb_2"></div>
				<div class="item"><input type="radio" name="prop_rb_2"></div>
				<div class="item"><input type="radio" name="prop_rb_2"></div>
				<div class="item"><input type="radio" name="prop_rb_2"></div>

				<div class="item">Delivery/<br>Etiquette</div>
				<div class="item"><input type="radio" name="prop_dl_2"></div>
				<div class="item"><input type="radio" name="prop_dl_2"></div>
				<div class="item"><input type="radio" name="prop_dl_2"></div>
				<div class="item"><input type="radio" name="prop_dl_2"></div>
				<div class="item"><input type="radio" name="prop_dl_2"></div>

				<div class="item">Questioning/<br>Responding</div>
				<div class="item"><input type="radio" name="prop_qu_2"></div>
				<div class="item"><input type="radio" name="prop_qu_2"></div>
				<div class="item"><input type="radio" name="prop_qu_2"></div>
				<div class="item"><input type="radio" name="prop_qu_2"></div>
				<div class="item"><input type="radio" name="prop_qu_2"></div>

				<div class="comments item">
					<label>Comments:</label>
					<textarea name="prop_com_2"></textarea>
				</div>

				<div class="item score">
					Final Score<br>(75-95)<br>
					<a id="prop_sc_2"></a>
				</div>
			</div>

			<div class="innergrid">
				<div class="side item">
					2nd Negative / 2nd Opposition<br>
					<label>Name:</label>
					<input type="text" name="op2">
				</div>

				<div class="team item">
					Team Code<br>
					<input type="text" name="opcode2" id="opcode2">
				</div>

				<div class="criteria item">Criteria</div>
				<div class="item">Poor<br>(15)</div>
				<div class="item">Weak<br>(16)</div>
				<div class="item">Avg.<br>(17)</div>
				<div class="item">Good<br>(18)</div>
				<div class="item">Great<br>(19)</div>

				<div class="item">Organization/<br>Structure</div>
				<div class="item"><input type="radio" name="op_org_2"></div>
				<div class="item"><input type="radio" name="op_org_2"></div>
				<div class="item"><input type="radio" name="op_org_2"></div>
				<div class="item"><input type="radio" name="op_org_2"></div>
				<div class="item"><input type="radio" name="op_org_2"></div>

				<div class="item">Evidence/<br>Analysis</div>
				<div class="item"><input type="radio" name="op_ev_2"></div>
				<div class="item"><input type="radio" name="op_ev_2"></div>
				<div class="item"><input type="radio" name="op_ev_2"></div>
				<div class="item"><input type="radio" name="op_ev_2"></div>
				<div class="item"><input type="radio" name="op_ev_2"></div>

				<div class="item">Rebuttal/<br>Clash</div>
				<div class="item"><input type="radio" name="op_rb_2"></div>
				<div class="item"><input type="radio" name="op_rb_2"></div>
				<div class="item"><input type="radio" name="op_rb_2"></div>
				<div class="item"><input type="radio" name="op_rb_2"></div>
				<div class="item"><input type="radio" name="op_rb_2"></div>

				<div class="item">Delivery/<br>Etiquette</div>
				<div class="item"><input type="radio" name="op_dl_2"></div>
				<div class="item"><input type="radio" name="op_dl_2"></div>
				<div class="item"><input type="radio" name="op_dl_2"></div>
				<div class="item"><input type="radio" name="op_dl_2"></div>
				<div class="item"><input type="radio" name="op_dl_2"></div>

				<div class="item">Questioning/<br>Responding</div>
				<div class="item"><input type="radio" name="op_qu_2"></div>
				<div class="item"><input type="radio" name="op_qu_2"></div>
				<div class="item"><input type="radio" name="op_qu_2"></div>
				<div class="item"><input type="radio" name="op_qu_2"></div>
				<div class="item"><input type="radio" name="op_qu_2"></div>

				<div class="comments item">
					<label>Comments:</label>
					<textarea name="op_com_2"></textarea>
				</div>

				<div class="item score">
					Final Score<br>(75-95)<br>
					<a id="op_sc_2"></a>
				</div>
			</div>

			<div class="total">
				<div>Total Proposition Team Score:<br>
				(Sum of Speaker 1 and 2)</div>
				<div id="propscore"></div>
			</div>

			<div class="total">
				<div>Total Opposition Team Score:<br>
				(Sum of Speaker 1 and 2)</div>
				<div id="opscore"></div>
			</div>
		</div>

		<p>I therefore award this debate to team: <p>
	</div>
</body>
</html>
