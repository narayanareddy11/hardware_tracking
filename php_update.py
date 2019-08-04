#! /usr/bin/python
""""
Get the csv file and update database entry list
Inputs:
    -database_retrive.txt
    -ganarated.csv

output:
	-php_update.txt
"""
import csv

def update_databse_entry_list():
	ff = open('php_update.txt', 'w')
	num = 0
	data = 1
	with open('database_retrive.txt', 'r') as f:
		con = f.readlines()
		for list2 in con:
			list1 = list2.split(" ")[0]
			data_varify = 0
			with open('ganarated.csv') as csvfile:
				spamreader = csv.reader(csvfile)
				for row in spamreader:

					for row in spamreader:
						if str(list1).strip() == str(row[0].strip()):
							# print "match"
							data_varify = 5
						else:
							pass
				if data_varify != 5 and data_varify == 0:
					print str(list2).strip()
					ff.write(list2)

				else:
					pass

def main():
	update_databse_entry_list()

if __name__ == '__main__':
	main()





