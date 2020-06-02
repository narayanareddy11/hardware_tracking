#!/home/dell/selinum/env/bin/python
"""

Get the employee hardware info

Output:
    1. PartSearchResult.xls
"""
from selenium import webdriver
import time
import sys
from selenium.webdriver.support.ui import Select
from pyvirtualdisplay import Display
import atexit
from pyvirtualdisplay import Display
display = Display(visible=0, size=(800, 600))
display.start()
start_time1 = time.time()

@atexit.register
def at_script_exit():
    temp1 = time.time() - start_time1
    hours1, rest1 = divmod(temp1, 3600)
    minutes1, seconds1 = divmod(rest1, 60)
    sec1, mili1 = divmod(seconds1, 1)
    number_dec21 = str(mili1 - int(mili1))[2:5]
    TIME_Q = '%d:%d:%d:%s' % (hours1, minutes1, seconds1, number_dec21)
    print("++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++")
    print"Duration: (Hours : Minutes : Seconds : milliseconds)", str(TIME_Q)
    print("++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++")
    time.sleep(5)
    return


def hardware_automation():
    try:
        driver = webdriver.Chrome('./chromedriver')
    except:
        print "Chrome driver not working  please check\n"
    paas = open('/home/narayana/workspace/M-Track-Pipeline/encript', 'r')
    credi = paas.read().split()
    username = credi[0].strip()
    password = credi[1].strip()
    # print username, password
    url = "http://" + username + ":" + password + "@mtrackglobal.us.dell.com/Mtrack"
    driver.get(url)
    # driver.get("http://"+username + ":" + password + "@mtrackglobal.us.dell.com/Mtrack")
    time.sleep(4)
    # driver.find_element_by_id("LocationName").click()
    s1 = Select(driver.find_element_by_id('LocationName'))
    s1.select_by_index(1)
    # select = Select(driver.find_element_by_id('BDC - PG MATERIALS LIBRARY - INBGL5'))
    # icon_inventory
    time.sleep(4)
    driver.find_element_by_class_name("icon_inventory").click()
    time.sleep(4)
    driver.find_element_by_class_name("ng-binding").click()
    time.sleep(4)
    for loop1 in range(20):  # update checkbox  click
        try:

            myElement4 = driver.find_element_by_xpath('//*[@id="collapseTen"]/div/div[2]/div[25]/input[2]')
            driver.execute_script("arguments[0].click();", myElement4);
            break
        except:
            print "click not working \n"
            time.sleep(15)
    print driver.title
    time.sleep(4)
    for loop1 in range(20):  # update checkbox  click
        try:

            myElement4 = driver.find_element_by_xpath(
                '//*[@id="modal-fetchBorrower"]/div/div/div[2]/div/div[1]/span/button')
            driver.execute_script("arguments[0].click();", myElement4);
            break
        except:
            print "update checkbox  click         not working \n"
            time.sleep(15)
    time.sleep(4)
    for loop1 in range(20):  # update checkbox  click
        try:

            myElement44 = driver.find_element_by_xpath(
                '//*[@id="modal-fetchBorrower"]/div/div/div[2]/div/div[1]/span/div/form/div[1]/div[3]/input')
            driver.execute_script("arguments[0].click();", myElement44);
            break
        except:
            print "update checkbox  click         not working \n"
            time.sleep(15)
    myElement44.send_keys(sys.argv[1])
    time.sleep(2)
    for employee_names in sys.argv[2:]:
        for loop1 in range(20):  # update checkbox  click
            try:

                myElement9 = driver.find_element_by_xpath(
                    '//*[@id="modal-fetchBorrower"]/div/div/div[2]/div/div[1]/span/div/form/div[2]/div[1]')
                driver.execute_script("arguments[0].click();", myElement9);
                break
            except:
                print "update checkbox  click         not working \n"
                time.sleep(15)
        time.sleep(3)
        for loop1 in range(20):  # update checkbox  click
            try:
                myElement10 = driver.find_element_by_xpath(
                    '//*[@id="modal-fetchBorrower"]/div/div/div[2]/div/div[1]/span/div/form/div[1]/div[3]/button')
                driver.execute_script("arguments[0].click();", myElement10);
                break
            except:
                print "update checkbox  CLEAR RRRRRRRRRRRRR        not working \n"
                time.sleep(15)

        myElement44.send_keys(employee_names)
        time.sleep(3)
    for loop1 in range(20):  # update checkbox  click
        try:
            myElement9 = driver.find_element_by_xpath(
                '//*[@id="modal-fetchBorrower"]/div/div/div[2]/div/div[1]/span/div/form/div[2]/div[1]')
            driver.execute_script("arguments[0].click();", myElement9);
            break
        except:
            print "update checkbox  click         not working \n"
            time.sleep(15)
    time.sleep(5)
    for loop1 in range(20):  # update checkbox  click
        try:

            myElement9 = driver.find_element_by_xpath('//*[@id="modal-fetchBorrower"]/div/div/div[3]/button')
            driver.execute_script("arguments[0].click();", myElement9);
            break
        except:
            print "update checkbox  click         not working \n"
            time.sleep(15)
    time.sleep(5)
    for loop1 in range(20):  # update checkbox  click
        try:

            myElement9 = driver.find_element_by_xpath('//*[@id="accordion"]/div[5]/a/input')
            driver.execute_script("arguments[0].click();", myElement9);
            break
        except:
            print "update checkbox  click         not working \n"
            time.sleep(15)
    time.sleep(5)
    for loop1 in range(20):  # update checkbox  click
        try:

            myElement9 = driver.find_element_by_xpath('//*[ @ id = "divResult"]/div[1]/span/a')
            driver.execute_script("arguments[0].click();", myElement9);
            break
        except:
            print "update checkbox  click         not working \n"
            time.sleep(15)
    time.sleep(6)
    driver.close()

def main():
    hardware_automation()

if __name__ == '__main__':
    main()










