#! /usr/bin/python
"""
Convert build.xls to ganarated.csv
Check the no of entrys in database

Inputs:
    1. PartSearchResult.xls
"""

import csv
import subprocess
import time
import sys


def analytics_xls_cvs():
	ff = open('database_add.txt', 'w')
	num = 0
	try:
		sub_csv = subprocess.check_output('cp -r /home/Downloads/PartSearchResult.xls ganarated.csv', shell=True)
		time.sleep(0.3)
	except:
		print "PartSearchResult file is not found in Download directory"
		sys.exit()
	num = str(subprocess.check_output('php php_file.php', shell=True)).splitlines()
	try:
		if len(num) > 2:
			num = int(num[2])
		else:
			num = int(num[0])
	except:
		num = num
	print "Database records: ", str(num)
	time.sleep(0.4)
	num = int(num) + 1
	data = 1
	with open('ganarated.csv') as csvfile:
		spamreader = csv.reader(csvfile)

		for row in spamreader:
			data_l = ""
			if "Serial Number" in row[0]:
				print "Serial Number is lineremoving"
			else:
				if len(row) == 37:
					row = row[:-2]

					data_l = [num, row[0], row[1], row[2], row[3], row[4], row[5], row[6], row[7], row[8], row[9],
							  row[10], row[11], row[12], row[13], row[14], row[15], row[16], row[17], row[18], row[19],
							  row[20], row[21], row[22], row[23], row[24], row[25], row[26], row[28], row[29], row[30],
							  row[31], row[32], row[33], row[34], '', '']
					print data_l
				elif len(row) == 35:
					data_l = [num, row[0], row[1], row[2], row[3], row[4], row[5], row[6], row[7], row[8], row[9],
							  row[10], row[11], row[12], row[13], row[14], row[15], row[16], row[17], row[18], row[19],
							  row[20], row[21], row[22], row[23], row[24], row[25], row[26], row[27], row[28], row[29],
							  row[30], row[31], row[32], row[33], row[34], '']
				elif len(row) == 27:
					data = 4
					back_up = [num] + row
				elif data == 4:
					data_l = back_up + row[2:]
					data = 1
				else:
					data_l = [num, row[0], row[1], row[2], row[3], row[4], row[5], row[6], row[7], row[8], row[9],
							  row[10], row[11], row[12], row[13], row[14], row[15], row[16], row[17], row[18], row[19],
							  row[20], row[21], row[22], row[23], row[24], row[25], row[26], row[27], row[28], row[29],
							  row[30], row[31], row[32], row[33], row[34], row[35]]
		data_varify = 0
		list1 = []
		aa = ''
		try:
			aa = data_l[1]
		except:
			pass
		try:
			data_l_cc = data_l
		except:
			pass
		# print len(data_l)
		data_varify = 0
		list1 = []

		with open('database_retrive.txt', 'r') as f:
			con = f.readlines()
			for list2 in con:
				list1 = list2.split(" ")[0]

				if str(aa) == str(list1).strip():
					mar1, mar2 = str(aa), str(list1)
					data_varify = 5
				else:
					pass
			if data_varify == 5:
				pass
			else:
				if data_l_cc:
					num = int(num) + 1
					ff.write(str(tuple(data_l_cc)) + "\n")
	csvfile.close()
	ff.close()

def main():
	analytics_xls_cvs()

if __name__ == '__main__':
	main()


