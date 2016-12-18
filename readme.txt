配置修改    http://www.gupiao.cn/runconf/runtime

股票日子初始化     http://www.gupiao.cn/runinit/index/holiday-real
股票日子查询：http://www.gupiao.cn/runconf/holiday-real/
股票日子变更：http://www.gupiao.cn/runinit/index/holiday-raw

假期日子变更：http://www.gupiao.cn/runconf/holiday-raw/

http://market.finance.sina.com.cn/downxls.php?date=2016-12-16&symbol=sh601988
driver = webdriver.Firefox()
driver.implicitly_wait(30) # 隐性等待，最长等30秒
driver.get('http://quotes.money.163.com/trade/lsjysj_000517.html#06f01')
browser.find_element_by_id("downloadData").click()
//browser.find_element_by_id("su").click()
browser.find_element_by_class("blue_btn submit").click()




