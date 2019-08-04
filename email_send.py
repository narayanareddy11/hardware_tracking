#!/usr/bin/env python
"""
Send complete mail report list
Inputs:
    -coverage_email.html
Returns:
    -email format of coverage_email.html
"""
import smtplib
import sys
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
with open('coverage_email.html', 'r') as f:
	con = f.read()


admin = 'BDC_Build_Team@dellteam.com'
msg = MIMEMultipart('alternative')


arguments = sys.argv[1:]

#recipients = ['venkata_narayana_red@dellteam.com', 'rami_karri@dellteam.com', 'jafar_sadiq_shaik@dellteam.com', 'ramesh_shirwal@dellteam.com', 'Satish_Kumar_M@DellTeam.com
recipients = arguments #venkata_narayana_red@dellteam.com

msg['Subject'] = "Missing Hardware Tracker location BCD-Build-Team Automation"
msg['From'] = admin
#msg['To'] = ", ".join(recipients)

msg['To'] = ", ".join(sys.argv[1:])

# Create the body of the message (a plain-text and an HTML version).

html = con

# Record the MIME types of both parts - text/plain and text/html.

part2 = MIMEText(html, 'html')

# Attach parts into message container.
# According to RFC 2046, the last part of a multipart message, in this case
# the HTML message, is best and preferred.

msg.attach(part2)
print "Mailid's :", sys.argv[1:]
# Send the message via local SMTP server.
s = smtplib.SMTP('10.35.178.56')
# sendmail function takes 3 arguments: sender's address, recipient's address
# and message to send - here it is sent as one string.
s.sendmail(admin, recipients, msg.as_string())
s.quit()
