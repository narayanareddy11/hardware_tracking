#!/usr/bin/env python
"""
Converting the html template format

Inputs:
    -database_coverage
    -database_coverage
Returns:
    -coverage_email.html
"""
import subprocess

def email_template_conv():
	ff = open('coverage_email.html', 'w')
	num = 2
	num_ee = 2
	with open('database_coverage.txt', 'r') as f:
		missing = len(f.readlines())
	with open('database_coverage.txt', 'r') as f:
		total_num = len(f.readlines())
	data = 1
	count_1 = str(subprocess.check_output('php emial_count_table.php', shell=True)).strip().splitlines()
	print count_1
	Total_1 = str(missing) + str("/") + str(total_num)
	print "Total hardware Hardware Location details are missing : ", str(Total_1)
	email_header = ("""\
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns="http://www.w3.org/TR/REC-html40"><head><meta http-equiv=Content-Type content="text/html; charset=us-ascii"><meta name=Generator content="Microsoft Word 15 (filtered medium)"><style><!--
/* Font Definitions */
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
h3
	{mso-style-priority:9;
	mso-style-link:"Heading 3 Char";
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	font-size:13.5pt;
	font-family:"Times New Roman",serif;}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:#0563C1;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-priority:99;
	color:#954F72;
	text-decoration:underline;}
span.EmailStyle17
	{mso-style-type:personal-compose;
	font-family:"Calibri",sans-serif;
	color:windowtext;}
span.Heading3Char
	{mso-style-name:"Heading 3 Char";
	mso-style-priority:9;
	mso-style-link:"Heading 3";
	font-family:"Times New Roman",serif;
	font-weight:bold;}
.MsoChpDefault
	{mso-style-type:export-only;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}
--></style><!--[if gte mso 9]><xml>
<o:shapedefaults v:ext="edit" spidmax="1026" />
</xml><![endif]--><!--[if gte mso 9]><xml>
<o:shapelayout v:ext="edit">
<o:idmap v:ext="edit" data="1" />
</o:shapelayout></xml><![endif]--></head><body lang=EN-US link="#0563C1" vlink="#954F72"><div class=WordSection1><p class=MsoNormal style='margin-bottom:12.0pt'><b><span style='font-size:9.0pt;font-family:"Arial",sans-serif;color:#AAAAAA'>Dell - Internal Use - Confidential </span></b><span style='font-size:12.0pt'><o:p></o:p></span></p>



<p class=MsoNormal><span style='font-size:10.0pt'>Hi Team,<o:p></o:p></span></p><h3><span style='font-size:11.0pt;font-family:"Calibri",sans-serif'>Hardware Location details are missing for below : """ + str(
		Total_1) + """<o:p></o:p></span></h3>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns="http://www.w3.org/TR/REC-html40"><head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=us-ascii"><meta name=Generator content="Microsoft Word 15 (filtered medium)"><style><!--
/* Font Definitions */
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:#0563C1;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-priority:99;
	color:#954F72;
	text-decoration:underline;}
span.EmailStyle17
	{mso-style-type:personal-compose;
	font-family:"Calibri",sans-serif;
	color:windowtext;}
.MsoChpDefault
	{mso-style-type:export-only;
	font-family:"Calibri",sans-serif;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}
--></style><!--[if gte mso 9]><xml>
<o:shapedefaults v:ext="edit" spidmax="1026" />
</xml><![endif]--><!--[if gte mso 9]><xml>
<o:shapelayout v:ext="edit">
<o:idmap v:ext="edit" data="1" />
</o:shapelayout></xml><![endif]--></head><body lang=EN-US link="#0563C1" vlink="#954F72"><div class=WordSection1><table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'><tr><td width=158 valign=top style='width:155.8pt;border:solid windowtext 1.5pt;background:#4472C4;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='font-size:11.0pt;color:white'>BORROWER_NAME<o:p></o:p></span></b></p></td><td width=207 valign=top style='width:155.85pt;border:solid windowtext 1.5pt;border-left:none;background:#4472C4;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='font-size:11.0pt;color:white'>TOTAL_HARDWARE<o:p></o:p></span></b></p></td><td width=200 valign=top style='width:155.85pt;border:solid windowtext 1.5pt;border-left:none;background:#4472C4;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='font-size:11.0pt;color:white'>MISSING_HARDWARE_LOCATION</span></b><b><span style='font-size:11.0pt;color:white'><o:p></o:p></span></b></p></td></tr>

""")
	ff.write(email_header)
	for list_har in count_1:
		list_per = list_har.split(" ")
		num_ee = num_ee + 1
		mod_e = num_ee % 2
		if mod_e > 0:
			count_per_data = (
			"""<tr><td width=158 valign=top style='width:155.8pt;border:solid windowtext 1.5pt;border-top:none;background:#4472C4;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>""" +
			list_per[
				0] + """<o:p></o:p></span></b></p></td><td width=207 valign=top style='width:155.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;background:#B4C6E7;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" +
			list_per[
				1] + """<o:p></o:p></p></td><td width=200 valign=top style='width:155.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;background:#B4C6E7;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:red'>""" +
			list_per[2] + """</span><o:p></o:p></b></p></td></tr> """)
		else:
			count_per_data = (
			"""<tr><td width=158 valign=top style='width:155.8pt;border:solid windowtext 1.5pt;border-top:none;background:#4472C4;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>""" +
			list_per[
				0] + """<o:p></o:p></span></b></p></td><td width=207 valign=top style='width:155.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;background:#D9E2F3;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" +
			list_per[
				1] + """<o:p></o:p></p></td><td width=200 valign=top style='width:155.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;background:#D9E2F3;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:red'>""" +
			list_per[2] + """</span><o:p></o:p></b></p></td></tr>""")
		ff.write(count_per_data)
	count_per_heder = ("""
</table><p class=MsoNormal><o:p>&nbsp;</o:p></p></div> <p class=MsoNormal style='margin-bottom:12.0pt'><span style='font-size:10.0pt'>Hardware tracking tool link :<span style='color:#4472C4'> </span></span><span style='color:#4472C4'><a href="http://100.101.23.63/"><span style='color:#4472C4'>http://100.101.23.63/</span></a><o:p></o:p></span></p><table class=MsoTable15Grid4Accent6 border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'><tr><td width=94 valign=top style='width:77.9pt;border:solid windowtext 1.0pt;background:#70AD47;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>Id<o:p></o:p></span></b></p></td>


<td width=158 valign=top style='width:77.9pt;border:solid windowtext 1.0pt;border-left:none;background:#70AD47;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>Serial_Number<o:p></o:p></span></b></p></td>

<td width=158 valign=top style='width:77.9pt;border:solid windowtext 1.0pt;border-left:none;background:#70AD47;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>Part<o:p></o:p></span></b></p></td>

<td width=158 valign=top style='width:77.9pt;border:solid windowtext 1.0pt;border-left:none;background:#70AD47;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>Category<o:p></o:p></span></b></p></td>

<td width=158 valign=top style='width:77.9pt;border:solid windowtext 1.0pt;border-left:none;background:#70AD47;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>Project<o:p></o:p></span></b></p></td>


<td width=158 valign=top style='width:77.95pt;border:solid windowtext 1.0pt;border-left:none;background:#70AD47;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b><span style='color:white'>Borrower<o:p></o:p></span></b></p></td></tr>

""")
	ff.write(count_per_heder)
	with open('database_coverage.txt', 'r') as f:
		con = f.readlines()
		for list2 in con:
			list1 = list2.split("#$")
			l0a = str(list1[0]).replace(",", "").replace(" ", "").replace("-", "_").strip()
			l1a = str(list1[1]).replace(",", "").replace(" ", "").replace("-", "_").strip()
			l2a = str(list1[2]).replace(",", "").replace(" ", "").replace("-", "_").strip()
			l3a = str(list1[3]).replace(",", "").replace(" ", "").replace("-", "_").strip()
			l4a = str(list1[4]).replace(",", "").replace(" ", "").replace("-", "_").strip()
			l5a = str(list1[5]).replace(",", "").replace(" ", "").replace("-", "_").strip()
			print  l1a, l2a, l3a, l4a, l5a
			num = num + 1
			mod = num % 2
			if mod > 0:
				table1 = ("""
<tr><td width=94 valign=top style='width:77.9pt;border:solid windowtext 1.0pt;border-top:none;background:#E2EFD9;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b>""" + str(
					l0a) + """<o:p></o:p></b></p></td><td width=122 valign=top style='width:77.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E2EFD9;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l1a) + """<o:p></o:p></p></td><td width=158 valign=top style='width:77.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E2EFD9;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l2a) + """<o:p></o:p></p></td><td width=103 valign=top style='width:77.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E2EFD9;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l3a) + """<o:p></o:p></p></td><td width=79 valign=top style='width:77.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E2EFD9;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l4a) + """<o:p></o:p></p></td><td width=104 valign=top style='width:77.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E2EFD9;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l5a) + """<o:p></o:p></p></td></tr>

			""")
				ff.write(table1)
			else:
				# print("This is an even number.")
				table2 = ("""	

<tr><td width=94 valign=top style='width:77.9pt;border:solid windowtext 1.0pt;border-top:none;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal><b>""" + str(
					l0a) + """<o:p></o:p></b></p></td><td width=122 valign=top style='width:77.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l1a) + """<o:p></o:p></p></td><td width=158 valign=top style='width:77.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l2a) + """<o:p></o:p></p></td><td width=103 valign=top style='width:77.9pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l3a) + """<o:p></o:p></p></td><td width=79 valign=top style='width:77.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l4a) + """<o:p></o:p></p></td><td width=104 valign=top style='width:77.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal>""" + str(
					l5a) + """<o:p></o:p></p></td></tr>

			""")

				ff.write(table2)
	end = ("""	
</table><p class=MsoNormal><o:p>&nbsp;</o:p></p><p class=MsoNormal><b><span style='color:#5B9BD5'>Regards,<o:p></o:p></span></b></p><p class=MsoNormal><b><span style='color:#5B9BD5'>BDC_Build Team &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dell R&amp;D Centre, India-BG<o:p></o:p></span></b></p><p class=MsoNormal><u><span style='color:#0563C1'><a href="mailto:build%20team@DellTeam.com">build team@DellTeam.com</a></span></u><b><span style='color:#5B9BD5'><o:p></o:p></span></b></p><p class=MsoNormal><span style='color:#5B9BD5'>Mobile : +91 &#8211; 888xx999xx.</span><span style='color:#1F497D'><o:p></o:p></span></p><p class=MsoNormal><o:p>&nbsp;</o:p></p><p class=MsoNormal><o:p>&nbsp;</o:p></p></div></body></html>
""")
	ff.write(end)
	ff.close()

def main():
	email_template_conv()

if __name__ == '__main__':
	main()






