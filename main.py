from selenium import webdriver
import time
import unittest


class Test(unittest.TestCase):
    def setUp(self):
        self.driver = webdriver.Chrome('C:\\chromedriver.exe')
        self.driver.fullscreen_window()
        self.driver.get("http://127.0.0.1/aircat")

        self.firstname = "Mariusz"
        self.lastname = "Granda"
        self.phone = "123456787"
        self.email = "alejazda@gmail.com"
        self.password = "jakieśtamhasło"
        self.seconds = 0.75;

    def firstAssertionTest(self):
        driver = self.driver

        time.sleep(3 * self.seconds)
        element = driver.find_element_by_id("log_in")
        element.click()

        time.sleep(self.seconds)
        element = driver.find_element_by_name("firstname")
        element.send_keys(self.firstname)

        time.sleep(self.seconds)
        element = driver.find_element_by_name("lastname")
        element.send_keys(self.lastname)

        time.sleep(self.seconds)
        element = driver.find_element_by_name("email")
        element.send_keys(self.email)

        time.sleep(self.seconds)
        #scroll the site
        #driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")

        time.sleep(self.seconds)
        element = driver.find_element_by_name("phone")
        element.send_keys(self.phone)

        time.sleep(self.seconds)
        element = driver.find_element_by_name("password")
        element.send_keys(self.password)

        time.sleep(self.seconds)
        element = driver.find_element_by_id("submit_form")
        element.click()

        result = driver.find_element_by_id("response").get_attribute("innerHTML")
        print("Site response: " + result)

        time.sleep(3 * self.seconds)
        driver.quit()
        self.assertEqual(result, "Welcome " + self.firstname + " " + self.lastname + "!")


end_test = Test()
end_test.setUp()
end_test.firstAssertionTest()
