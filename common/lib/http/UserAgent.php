<?php
namespace common\lib\http;
class UserAgent{
    //pc adroid
    //ie chrome

    public $agent=[
        'pc_firefox'=>[
            "User-Agent:Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;",
        ]];
    public $agetRaw=[
        "User-Agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; HTC; Titan",
        "User-Agent: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; InfoPath.2; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; 360SE)",
        "User-Agent:Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SE 2.X MetaSr 1.0; SE 2.X MetaSr 1.0; .NET CLR 2.0.50727; SE 2.X MetaSr 1.0)",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_0) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11",
        "Mozilla/5.0 (Linux; U; Android 2.2.1; zh-cn; HTC_Wildfire_A3333 Build/FRG83D) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
        "User-Agent:Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; en-us) AppleWebKit/534.50 (KHTML, like Gecko) Version/5.1 Safari/534.50",
        "User-Agent:Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; TencentTraveler 4.0; .NET CLR 2.0.50727)",
        "User-Agent: MQQBrowser/26 Mozilla/5.0 (Linux; U; Android 2.3.7; zh-cn; MB200 Build/GRJ22; CyanogenMod-7) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
        "User-Agent:Mozilla/5.0 (Windows NT 6.1; rv:2.0.1) Gecko/20100101 Firefox/4.0.1",
        "Mozilla/5.0 (Androdi; Linux armv7l; rv:5.0) Gecko/ Firefox/5.0 fennec/5.0",
        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; The World)",
        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Maxthon 2.0)",
        "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.8.131 Version/11.11",
        "Opera/9.80 (Android 2.3.4; Linux; Opera mobi/adr-1107051709; U; zh-cn) Presto/2.8.149 Version/11.10",
        "UCWEB7.0.2.37/28/999",
        "",
        "",
        "",
        "",

    ];

    /*
     * PC端：

360浏览器的判断标准是”360SE”字段，没有版本表示。
搜狗浏览器的判断标准是”SE“、”MetaSr“字段，版本号为SE后面的数字。
PC端chrome浏览器的判断标准是chrome字段，chrome后面的数字为版本号；移动端的chrome浏览器判断”android“、”linux“、”mobile safari“等字段，version后面的数字为版本号。
Safari由于Chrome及Nokia’s Series 60 browser也使用WebKit内核，因此Safari浏览器的判断必须是：包含safari字段，同时不包含chrome等信息，确定 后”version/“后面的数字即为版本号。在以上条件下包含Mobile字段的即为移动设备上的Safari浏览器。
腾讯浏览器的判断标准是”TencentTraveler“或者”QQBrowser“，TencentTraveler或QQBrowser后面的数字为版本号。
Firefox的判断标准是Firefox字段，firefox后面的数字为版本号。
Theworld浏览器的判断标准是”The world“字段，没有标示版本号。需要注意的是：The world 2.x版本的User-Agent中没有”The world“的字段。
遨游浏览器的判断标准是”Maxthon“，Maxthon后面的数字为版本号。
opera浏览器的判断标准是opera字段，opera字段后面的数字为版本号。
UC浏览器 UC Web有多种模式浏览方式，对应的User-Agent为： UCWEB7.0.2.37/28/999
UC标准 User-Agent: NOKIA5700/ UCWEB7.0.2.37/28/999
UCOpenwave User-Agent: Openwave/ UCWEB7.0.2.37/28/999
UC Opera User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; ) Opera/UCWEB7.0.2.37/28/999 UC浏览器的判断标准是”UCWEB“字段，UCWEB后面的数字为版本号。

操作系统定向依赖于各个浏览器在打开页面时所传输的http header信息中的User-Agent，关于User-Agent的说明，请参见Http header之User-Agent。


    ====================
    Opera
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 OPR/26.0.1656.60
Opera/8.0 (Windows NT 5.1; U; en)
Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.50
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 9.50

Firefox
Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0
Mozilla/5.0 (X11; U; Linux x86_64; zh-CN; rv:1.9.2.10) Gecko/20100922 Ubuntu/10.10 (maverick) Firefox/3.6.10

Safari
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2

chrome
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36
Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.133 Safari/534.16

360
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36
Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko


淘宝浏览器
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.11 TaoBrowser/2.0 Safari/536.11

猎豹浏览器
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.71 Safari/537.1 LBBROWSER
Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; LBBROWSER)
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; QQDownload 732; .NET4.0C; .NET4.0E; LBBROWSER)"

QQ浏览器
Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; QQBrowser/7.0.3698.400)
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; QQDownload 732; .NET4.0C; .NET4.0E)

sogou浏览器
Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.84 Safari/535.11 SE 2.X MetaSr 1.0
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SV1; QQDownload 732; .NET4.0C; .NET4.0E; SE 2.X MetaSr 1.0)

maxthon浏览器
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Maxthon/4.4.3.4000 Chrome/30.0.1599.101 Safari/537.36

UC浏览器
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.122 UBrowser/4.0.3214.0 Safari/537.36


==================== 移动浏览器大全 ====================

IPhone
Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5

IPod
Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5

IPAD
Mozilla/5.0 (iPad; U; CPU OS 4_2_1 like Mac OS X; zh-cn) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5
Mozilla/5.0 (iPad; U; CPU OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5

Android
Mozilla/5.0 (Linux; U; Android 2.2.1; zh-cn; HTC_Wildfire_A3333 Build/FRG83D) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1
Mozilla/5.0 (Linux; U; Android 2.3.7; en-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1

QQ浏览器 Android版本
MQQBrowser/26 Mozilla/5.0 (Linux; U; Android 2.3.7; zh-cn; MB200 Build/GRJ22; CyanogenMod-7) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1

Android Opera Mobile
Opera/9.80 (Android 2.3.4; Linux; Opera Mobi/build-1107180945; U; en-GB) Presto/2.8.149 Version/11.10

Android Pad Moto Xoom
Mozilla/5.0 (Linux; U; Android 3.0; en-us; Xoom Build/HRI39) AppleWebKit/534.13 (KHTML, like Gecko) Version/4.0 Safari/534.13

BlackBerry
Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+

WebOS HP Touchpad
Mozilla/5.0 (hp-tablet; Linux; hpwOS/3.0.0; U; en-US) AppleWebKit/534.6 (KHTML, like Gecko) wOSBrowser/233.70 Safari/534.6 TouchPad/1.0

Nokia N97
Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.019; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124

Windows Phone Mango
Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; HTC; Titan)


UC浏览器
UCWEB7.0.2.37/28/999

NOKIA5700/ UCWEB7.0.2.37/28/999

UCOpenwave
Openwave/ UCWEB7.0.2.37/28/999

UC Opera
Mozilla/4.0 (compatible; MSIE 6.0; ) Opera/UCWEB7.0.2.37/28/999
    All User Agent Strings 
BROWSERS 
ABrowse

Click on any string to get more details

ABrowse 0.6 
Mozilla/5.0 (compatible; U; ABrowse 0.6; Syllable) AppleWebKit/420+ (KHTML, like Gecko) 
ABrowse 0.4 
Mozilla/5.0 (compatible; ABrowse 0.4; Syllable) 
Acoo Browser

 

Multi-tabbed Internet browser based on the Internet Explorer engine

Click on any string to get more details

Acoo Browser 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Acoo Browser; GTB5; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; Maxthon; InfoPath.1; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Acoo Browser; GTB6; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; InfoPath.1; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Acoo Browser; GTB5; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; InfoPath.1; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB6; Acoo Browser; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; Acoo Browser; GTB5; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; InfoPath.1; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Acoo Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Acoo Browser; GTB5; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Acoo Browser; GTB5; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; InfoPath.1; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Acoo Browser; InfoPath.2; .NET CLR 2.0.50727; Alexa Toolbar) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Acoo Browser; .NET CLR 2.0.50727; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Acoo Browser; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727; FDM; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Acoo Browser; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Acoo Browser; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 2.0.50727) 
America Online Browser

Click on any string to get more details

America Online Browser 1.1 
Mozilla/4.0 (compatible; MSIE 7.0; America Online Browser 1.1; Windows NT 5.1; (R1 1.5); .NET CLR 2.0.50727; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; America Online Browser 1.1; rev1.5; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; America Online Browser 1.1; rev1.5; Windows NT 5.1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; America Online Browser 1.1; rev1.5; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0; InfoPath.1; .NET CLR 2.0.50727; Media Center PC 3.0; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; America Online Browser 1.1; rev1.2; Windows NT 5.1; SV1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1; HbTools 4.7.0) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1; FunWebProducts; .NET CLR 1.1.4322; InfoPath.1; HbTools 4.8.0) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1; FunWebProducts; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 3.1) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1; .NET CLR 1.1.4322; HbTools 4.7.1) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 3.1) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; SV1) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; FunWebProducts; (R1 1.5); HbTools 4.7.7) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1; FunWebProducts) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows NT 5.0) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; Windows 98) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; rev1.5; Windows NT 5.1; SV1; FunWebProducts; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; rev1.5; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.1)

More America Online Browser 1.1 user agents strings –>>

AmigaVoyager

Click on any string to get more details

AmigaVoyager 3.2 
AmigaVoyager/3.2 (AmigaOS/MC680×0) 
AmigaVoyager 2.95 
AmigaVoyager/2.95 (compatible; MC680×0; AmigaOS; SV1) 
AmigaVoyager/2.95 (compatible; MC680×0; AmigaOS) 
AOL

Click on any string to get more details

AOL 9.6 
Mozilla/4.0 (compatible; MSIE 8.0; AOL 9.6; AOLBuild 4340.12; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0) 
Mozilla/4.0 (compatible; MSIE 8.0; AOL 9.6; AOLBuild 4340.12; Windows NT 5.1; Trident/4.0; GTB6.3) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 9.6; AOLBuild 4340.12; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
AOL 9.5 
Mozilla/4.0 (compatible; MSIE 8.0; AOL 9.5; AOLBuild 4337.43; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.21022; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 8.0; AOL 9.5; AOLBuild 4337.29; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.21022; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.93; Windows NT 5.1; Trident/4.0; DigExt; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.89; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.81; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.81; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.80; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.53; Windows NT 6.0; FunWebProducts; GTB6; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.43; Windows NT 6.0; WOW64; GTB5; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.43; Windows NT 5.1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.43; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.42; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.40; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.40; Windows NT 6.0; FunWebProducts; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.40; Windows NT 5.1; Trident/4.0; GTB6; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.40; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.36; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.30618; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.36; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.36; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.5; AOLBuild 4337.35; Windows NT 6.0; WOW64; GTB5; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618)

More AOL 9.5 user agents strings –>>

AOL 9.1 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.5009; Windows NT 5.1; GTB5; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.5006; Windows NT 5.1; Trident/4.0; DigExt; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.5006; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.5006; Windows NT 5.1; GTB5; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.5006; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 1.0.3705; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.5000; Windows NT 5.1; Trident/4.0) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.5000; Windows NT 5.1; Media Center PC 3.0; .NET CLR 1.0.3705; .NET CLR 1.1.4322; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.36; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.34; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.34; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.34; Windows NT 5.1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.34; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.27; Windows NT 6.0; WOW64; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; Media Center PC 5.0); UnAuth-State 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.27; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506); UnAuth-State 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4334.27; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; InfoPath.1); UnAuth-State 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.1; AOLBuild 4327.65535; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727); UnAuth-State 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 9.1; AOLBuild 4334.5006; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 9.1; AOLBuild 4334.5000; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 9.1; AOLBuild 4334.34; Windows NT 5.1; SV1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 9.1; AOLBuild 4334.27; Windows NT 5.1; SV1); UnAuth-State

More AOL 9.1 user agents strings –>>

AOL 9.0 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.2; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; Trident/4.0; FunWebProducts; GTB6.4; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 1.1.4322; .NET CLR 3.5.30729; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET CLR 3.0.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; Seekmo 10.0.406.0) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; FunWebProducts; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.2; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; FunWebProducts; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; Seekmo 10.0.341.0) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 6.0; FunWebProducts; GTB5; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; GTB5; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; GTB5; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; GTB5; .NET CLR 1.1.4322; .NET CLR 2.0.50727; OfficeLiveConnector.1.3; OfficeLivePatch.0.0) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; GTB5; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; GTB5; .NET CLR 1.0.3705; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; FunWebProducts; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; FunWebProducts; GTB5; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 9.0; Windows NT 5.1; .NET CLR 1.1.4322; Zango 10.1.181.0)

More AOL 9.0 user agents strings –>>

AOL 8.0 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 8.0; Windows NT 5.1; GTB5; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 8.0; Windows NT 5.1; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 8.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1; .NET CLR 3.0.04506.30) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 8.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 8.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 8.0; Windows NT 5.1; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 8.0; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; YComp 5.0.0.0; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; SV1; (R1 1.3); .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; SV1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; Q312461) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; FunWebProducts; SV1; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; FunWebProducts; SV1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; FunWebProducts) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1; (R1 1.3)) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 8.0; Windows NT 5.0)

More AOL 8.0 user agents strings –>>

AOL 7.0 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 7.0; Windows NT 5.1; FunWebProducts) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 7.0; Windows NT 5.1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; AOL 7.0; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; YComp 5.0.2.6; Hotbar 4.2.8.0) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; YComp 5.0.2.4) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; SV1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; SV1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; Q312461; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; Q312461) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; Hotbar 4.2.8.0) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; Hotbar 4.1.7.0) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows NT 5.0) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows 98; Win 9x 4.90; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows 98; Win 9x 4.90; (R1 1.3)) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows 98; Win 9x 4.90) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 7.0; Windows 98; SpamBlockerUtility 4.8.0)

More AOL 7.0 user agents strings –>>

AOL 6.0 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 6.0; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 6.0; Windows 98; Win 9x 4.90) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 6.0; Windows 98) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 6.0; Windows 95) 
Mozilla/4.0 (compatible; MSIE 5.0; AOL 6.0; Windows 98; DigExt; YComp 5.0.2.5) 
AOL 5.0 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 5.0; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 5.0; Windows 98; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; AOL 5.0; Windows 98) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 5.0; Windows NT 5.0) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 5.0; Windows 98; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 5.0; Windows 98; Win 9x 4.90) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 5.0; Windows 98) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 5.0; Windows 95) 
Mozilla/4.0 (compatible; MSIE 5.0; AOL 5.0; Windows 98; DigExt) 
Mozilla/4.0 (compatible; MSIE 5.0; AOL 5.0; Windows 95; DigExt) 
Mozilla/4.0 (compatible; MSIE 5.0; AOL 5.0; Windows 95) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 5.0; Windows NT 5.0) 
AOL 4.0 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 4.0; Windows 98) 
Mozilla/4.0 (compatible; MSIE 5.5; AOL 4.0; Windows 95) 
Mozilla/4.0 (compatible; MSIE 5.0; AOL 4.0; Windows 98; DigExt) 
Mozilla/4.0 (compatible; MSIE 5.01; AOL 4.0; Windows 98) 
Mozilla/4.0 (compatible; MSIE 4.01; AOL 4.0; Windows 98) 
Mozilla/4.0 (compatible; MSIE 4.01; AOL 4.0; Windows 95) 
Mozilla/4.0 (compatible; MSIE 4.01; AOL 4.0; Mac_68K) 
Arora

Click on any string to get more details

Arora 0.8.0 
Mozilla/5.0 (X11; U; Linux; de-DE) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.8.0 
Mozilla/5.0 (Windows; U; ; en-NZ) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.8.0 
Arora 0.6 
Mozilla/5.0 (X11; U; Linux; ru-RU) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6 (Change: 802 025a17d) 
Mozilla/5.0 (X11; U; Linux; fi-FI) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6 (Change: 754 46b659a) 
Mozilla/5.0 (X11; U; Linux; en-US) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6 
Mozilla/5.0 (X11; U; Linux; en-US) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6 (Change: ) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.6 (Change: ) 
Arora 0.4 
Mozilla/5.0 (X11; U; Linux; pt-PT) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; nb-NO) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; it-IT) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: 413 12f13f8) 
Mozilla/5.0 (X11; U; Linux; it-IT) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; hu-HU) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: 388 835b3b6) 
Mozilla/5.0 (X11; U; Linux; hu-HU) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; fr-FR) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; es-ES) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: 388 835b3b6) 
Mozilla/5.0 (X11; U; Linux; en-US) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; en-GB) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: 388 835b3b6) 
Mozilla/5.0 (X11; U; Linux; en-GB) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; de-DE) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 
Mozilla/5.0 (X11; U; Linux; cs-CZ) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: 333 41e3bc6) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: ) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de-DE) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: ) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; pt-BR) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: ) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.4 (Change: ) 
Arora 0.3 
Mozilla/5.0 (X11; U; Linux; en-GB) AppleWebKit/527+ (KHTML, like Gecko, Safari/419.3) Arora/0.3 (Change: 239 52c6958) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.3 (Change: 287 c9dfb30) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-BE) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.3 (Change: 287 c9dfb30) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.3 (Change: 287 c9dfb30) 
Arora 0.2 
Mozilla/5.0 (X11; U; Linux; sk-SK) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 (Change: 0 ) 
Mozilla/5.0 (X11; U; Linux; nb-NO) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 (Change: 0 ) 
Mozilla/5.0 (X11; U; Linux; es-CR) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 (Change: 0 ) 
Mozilla/5.0 (X11; U; Linux; en-US) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 (Change: 189 35c14e0) 
Mozilla/5.0 (X11; U; Linux; en-US) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 (Change: 0 ) 
Mozilla/5.0 (X11; U; Linux; de-DE) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 (Change: 0 ) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de-DE) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl-NL) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-CH) AppleWebKit/523.15 (KHTML, like Gecko, Safari/419.3) Arora/0.2 
Avant Browser

Click on any string to get more details

Avant Browser 2.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Avant Browser; .NET CLR 2.0.50727; MAXTHON 2.0) 
Avant Browser 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; Avant Browser; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 3.5.21022; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Avant Browser; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB6.4; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; chromeframe; Avant Browser; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; InfoPath.1; .NET CLR 3.0.4506. 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB5; Avant Browser; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Avant Browser; Avant Browser; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT; Avant Browser; Avant Browser; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.1; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 3.5.21022; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; GTB6.3; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 1.1.4322; .NET CLR 3.5.30729; .NET CLR 3.0.30729 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 3.5.21022; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; Avant Browser; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; Avant Browser; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Avant Browser; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618; InfoPath.2; OfficeLiveConnector.1.3; OfficeLivePatch.0.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Avant Browser; Avant Browser; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; Tablet PC 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Avant Browser; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Avant Browser; Avant Browser; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Avant Browser; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04310.00; InfoPath.2)

More Avant Browser user agents strings –>>

Beonex 
Mozilla based browser, sibling of Netscape 7. 
Beonex Communicator contains 
-Navigator – web-browser 
-Mailnews – email/news client 
-Composer – web page editor

available for Windows, Linux, MacOs, FreeBSD

Click on any string to get more details

Beonex 0.8.2-stable 
Mozilla/5.0 (Windows; U; WinNT; en; rv:1.0.2) Gecko/20030311 Beonex/0.8.2-stable 
Beonex 0.8-stable 
Mozilla/5.0 (Windows; U; WinNT; en; Preview) Gecko/20020603 Beonex/0.8-stable 
BonEcho 
BonEcho is a developer preview release of the next generation Firefox browser and it is being made available for testing purposes only. BonEcho is intended for web application developers and the testing community

Click on any string to get more details

BonEcho 2.0b2 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.1b2) Gecko/20060821 BonEcho/2.0b2 (Debian-1.99+2.0b2+dfsg-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1b2) Gecko/20060821 BonEcho/2.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1b2) Gecko/20060826 BonEcho/2.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1b2) Gecko/20060831 BonEcho/2.0b2 
BonEcho 2.0b1 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.8.1b1) Gecko/20060601 BonEcho/2.0b1 (Ubuntu-edgy) 
BonEcho 2.0a3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1a3) Gecko/20060526 BonEcho/2.0a3 
BonEcho 2.0a2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1a2) Gecko/20060512 BonEcho/2.0a2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1a2) Gecko/20060512 BonEcho/2.0a2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1a2) Gecko/20060512 BonEcho/2.0a2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-GB; rv:1.8.1a2) Gecko/20060512 BonEcho/2.0a2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X Mach-O; en-US; rv:1.8.1a2) Gecko/20060512 BonEcho/2.0a2 
BonEcho 2.0.0.9 
Mozilla/5.0 (X11; U; OpenBSD ppc; en-US; rv:1.8.1.9) Gecko/20070223 BonEcho/2.0.0.9 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.9) Gecko/20071103 BonEcho/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071113 BonEcho/2.0.0.9 
BonEcho 2.0.0.8pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.8pre) Gecko/20071012 BonEcho/2.0.0.8pre 
BonEcho 2.0.0.7pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7pre) Gecko/20070901 BonEcho/2.0.0.7pre 
BonEcho 2.0.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.7) Gecko/20070918 BonEcho/2.0.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.7) Gecko/20071018 BonEcho/2.0.0.7 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.8.1.7) Gecko/20070917 BonEcho/2.0.0.7 
BonEcho 2.0.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.6) Gecko/20070812 BonEcho/2.0.0.6 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.8.1.6) Gecko/20070731 BonEcho/2.0.0.6 
BonEcho 2.0.0.5pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.5pre) Gecko/20070604 BonEcho/2.0.0.5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.5pre) Gecko/20070622 BonEcho/2.0.0.5pre 
BonEcho 2.0.0.4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4pre) Gecko/20070414 BonEcho/2.0.0.4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.4pre) Gecko/20070510 BonEcho/2.0.0.4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4pre) Gecko/20070416 BonEcho/2.0.0.4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4pre) Gecko/20070410 BonEcho/2.0.0.4pre 
BonEcho 2.0.0.4 
Mozilla/5.0 (X11; U; OpenBSD ppc; en-US; rv:1.8.1.4) Gecko/20070223 BonEcho/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070531 BonEcho/2.0.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4) Gecko/20070416 BonEcho/2.0.0.4 
BonEcho 2.0.0.3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-GB; rv:1.8.1.3pre) Gecko/20070302 BonEcho/2.0.0.3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3pre) Gecko/20070302 BonEcho/2.0.0.3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.3pre) Gecko/20070301 BonEcho/2.0.0.3pre 
BonEcho 2.0.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/20070517 BonEcho/2.0.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a3) Gecko/20070409 BonEcho/2.0.0.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.3) Gecko/20070329 BonEcho/2.0.0.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.3) Gecko/20070322 BonEcho/2.0.0.3 
BonEcho 2.0.0.2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-GB; rv:1.8.1.2pre) Gecko/20070226 BonEcho/2.0.0.2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2pre) Gecko/20070213 BonEcho/2.0.0.2pre 
BonEcho 2.0.0.21pre 
Mozilla/5.0 (BeOS; U; Haiku BePC; en-US; rv:1.8.1.21pre) Gecko/20090218 BonEcho/2.0.0.21pre 
BonEcho 2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070302 BonEcho/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070224 BonEcho/2.0.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070227 BonEcho/2.0.0.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.2) Gecko/20070223 BonEcho/2.0.0.2 
BonEcho 2.0.0.1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1pre) Gecko/20061203 BonEcho/2.0.0.1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1pre) Gecko/20061202 BonEcho/2.0.0.1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1pre) Gecko/20061122 BonEcho/2.0.0.1pre 
BonEcho 2.0.0.18 
Mozilla/5.0 (BeOS; U; Haiku BePC; en-US; rv:1.8.1.18) Gecko/20081114 BonEcho/2.0.0.18 
BonEcho 2.0.0.17 
Mozilla/5.0 (BeOS; U; Haiku BePC; en-US; rv:1.8.1.17) Gecko/20080831 BonEcho/2.0.0.17 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.8.1.17) Gecko/20080831 BonEcho/2.0.0.17 
BonEcho 2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080417 BonEcho/2.0.0.14 
Mozilla/5.0 (BeOS; U; Haiku BePC; en-US; rv:1.8.1.14) Gecko/20080429 BonEcho/2.0.0.14 
BonEcho 2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080401 BonEcho/2.0.0.13 
BonEcho 2.0.0.12pre 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.12pre) Gecko/20080103 BonEcho/2.0.0.12pre 
BonEcho 2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.12) Gecko/20080208 BonEcho/2.0.0.12 
BonEcho 2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 BonEcho/2.0.0.11 
BonEcho 2.0.0.10 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.8.1.10) Gecko/20071128 BonEcho/2.0.0.10 
BonEcho 2.0.0.1 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.1.1) Gecko/20061219 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux mips; en-US; rv:1.8.1.1) Gecko/20070628 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.1) Gecko/20070117 Epiphany/2.16 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20070222 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20070220 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20070217 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20070215 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20070115 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.1) Gecko/20070110 BonEcho/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.1) Gecko/20070131 BonEcho/2.0.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061222 BonEcho/2.0.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.1) Gecko/20061230 BonEcho/2.0.0.1 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.8.1.1) Gecko/20061220 BonEcho/2.0.0.1 
BonEcho 2.0 
Mozilla/5.0 (X11; U; Win95; en-US; rv:1.8.1) Gecko/20061125 BonEcho/2.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1) Gecko/20061129 BonEcho/2.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1) Gecko/20061031 BonEcho/2.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1) Gecko/20061026 BonEcho/2.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1) Gecko/20061003 BonEcho/2.0 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1) Gecko/20061031 BonEcho/2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1) Gecko/20061210 BonEcho/2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1) Gecko/20061209 BonEcho/2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1) Gecko/20061121 BonEcho/2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1) Gecko/20061113 BonEcho/2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1) Gecko/20061112 BonEcho/2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1) Gecko/20060930 BonEcho/2.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1) Gecko/20061026 BonEcho/2.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1) Gecko/20061025 BonEcho/2.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1) Gecko/20061024 BonEcho/2.0 
Mozilla/5.0 (BeOS; U; BeOS BeBox; fr; rv:1.9) Gecko/2008052906 BonEcho/2.0 
BonEcho 0.7b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.9a1) Gecko/20061128 BonEcho/0.7b1 
Camino

Click on any string to get more details

Camino 2.0b3pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en; rv:1.9.0.8pre) Gecko/2009022800 Camino/2.0b3pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en; rv:1.9.0.10pre) Gecko/2009041800 Camino/2.0b3pre (like Firefox/3.0.10pre) 
Camino 2.0.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en; rv:1.9.0.18) Gecko/2010021619 Camino/2.0.2 (like Firefox/3.0.18) 
Camino 1.6pre 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.8.1.4pre) Gecko/20070511 Camino/1.6pre 
Camino 1.6a1pre 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; de; rv:1.8.1.5pre) Gecko/20070605 Camino/1.6a1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.4pre) Gecko/20070526 Camino/1.6a1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.4pre) Gecko/20070521 Camino/1.6a1pre 
Camino 1.6.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; it; rv:1.8.1.21) Gecko/20090327 Camino/1.6.7 (MultiLang) (like Firefox/2.0.0.21pre) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.8.1.21) Gecko/20090327 Camino/1.6.7 (like Firefox/2.0.0.21pre) 
Camino 1.5.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.8.1.12) Gecko/20080206 Camino/1.5.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X Mach-O; en; rv:1.8.1.12) Gecko/20080206 Camino/1.5.5 
Camino 1.5.4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.11) Gecko/20071128 Camino/1.5.4 
Camino 1.5.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.8.1.6) Gecko/20070809 Camino/1.5.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.6) Gecko/20070809 Firefox/2.0.0.6 Camino/1.5.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.6) Gecko/20070809 Camino/1.5.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6 Camino/1.5.1 
Camino 1.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.8.1.4) Gecko/20070509 Camino/1.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.4) Gecko/20070609 Camino/1.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.4) Gecko/20070607 Camino/1.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.4) Gecko/20070509 Camino/1.5 
Camino 1.2+ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.9a4pre) Gecko/20070404 Camino/1.2+ 
Camino 1.1b+ 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.4pre) Gecko/20070417 Camino/1.1b+ 
Camino 1.1b 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.8.1.2pre) Gecko/20070227 Camino/1.1b 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.2pre) Gecko/20070223 Camino/1.1b 
Camino 1.1a2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.2pre) Gecko/20070108 Camino/1.1a2 
Camino 1.1a1+ 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.1pre) Gecko/20061126 Camino/1.1a1+ 
Camino 1.1a1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1) Gecko/20061018 Camino/1.1a1 
Camino 1.0rc1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.1) Gecko/20060203 Camino/1.0rc1 
Camino 1.0b2+ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.1) Gecko/20060119 Camino/1.0b2+ 
Camino 1.0b2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8) Gecko/20051229 Camino/1.0b2 
Camino 1.0b1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8) Gecko/20051228 Camino/1.0b1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8) Gecko/20051107 Camino/1.0b1 
Camino 1.0a1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8b4) Gecko/20050914 Camino/1.0a1 
Camino 1.0.4 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.10) Gecko/20070228 Camino/1.0.4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.10) Gecko/20070228 Camino/1.0.4 
Camino 1.0.3 
Mozilla/5.0 (Macintosh; U; PPC Max OS X Mach-O; it-IT; rv:1.8.0.7) Gecko/200609211 Camino/1.0.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.7) Gecko/20060911 Camino/1.0.3 (MultiLang) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.7) Gecko/20060911 Camino/1.0.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.7) Gecko/20060911 Camino/1.0.3 
Camino 1.0.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.4) Gecko/20060613 Camino/1.0.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.4) Gecko/20060613 Camino/1.0.2 
Camino 1.0.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.3) Gecko/20060503 Camino/1.0.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.3) Gecko/20060427 Camino/1.0.1 
Camino 1.0+ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1b1) Gecko/20060807 Camino/1.0+ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1b1) Gecko/20060721 Camino/1.0+ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1a3) Gecko/20060528 Camino/1.0+ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1) Gecko/20061013 Camino/1.0+ (Firefox compatible) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1) Gecko/20061013 Camino/1.0+ 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1a3) Gecko/20060601 Camino/1.0+ 
Camino 1.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.1) Gecko/20060307 Camino/1.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.1) Gecko/20060214 Camino/1.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8b5) Gecko/20051021 Camino/1.0+ 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.1) Gecko/20060214 Camino/1.0 
Camino 0.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8b2) Gecko Camino/0.9+ 
Camino 0.8b 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7) Gecko/20040517 Camino/0.8b 
Camino 0.8.4 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.8) Gecko/20050427 Camino/0.8.4 
Camino 0.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.2) Gecko/20040825 Camino/0.8.1 
Camino 0.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.0.1) Gecko/20030306 Camino/0.7 
Charon 
Charon is a web browser for the Inferno operating system

Click on any string to get more details

Charon 
Mozilla/4.08 (Charon; Inferno) 
Cheshire 
Cheshire is a test of an AOL product for the Macintosh. Cheshire is designed to make it easy for users to read and write email, surf the web, listen to AOL Radio and dial up to the Internet. Cheshire includes AOL’s Parental Controls and works with Apple’s built-in applications like iChat and iPhoto.

Click on any string to get more details

Cheshire 1.0.UNOFFICIAL 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.8 (KHTML, like Gecko, Safari) Cheshire/1.0.UNOFFICIAL 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko, Safari) Cheshire/1.0.UNOFFICIAL 
Cheshire 1.0.ALPHA 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko, Safari/419.3) Cheshire/1.0.ALPHA 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Safari) Cheshire/1.0.ALPHA 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko, Safari) Safari/419.3 Cheshire/1.0.ALPHA 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) Safari/419.3 Cheshire/1.0.ALPHA 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) AppleWebKit/418.9 Cheshire/1.0.ALPHA 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko, Safari/419.3) Cheshire/1.0.ALPHA 
Chimera

Click on any string to get more details

Chimera 0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-PL; rv:1.0.1) Gecko/20021111 Chimera/0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.0.1) Gecko/20021111 Chimera/0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.0.1) Gecko/20021104 Chimera/0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.0.1) Gecko/20030111 Chimera/0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.0.1) Gecko/20030109 Chimera/0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.0.1) Gecko/20021220 Chimera/0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.0.1) Gecko/20021216 Chimera/0.6 
Chrome 
Free open-source web browser developed by Google. Chromium is the name of the open source project behind Google Chrome, released under the BSD license.

Click on any string to get more details

Chrome 6.0.400.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.9 (KHTML, like Gecko) Chrome/6.0.400.0 Safari/533.9 
Chrome 6.0.397.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.8 (KHTML, like Gecko) Chrome/6.0.397.0 Safari/533.8 
Chrome 6.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/6.0 
Chrome 5.0.370.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.370.0 Safari/533.4 
Chrome 5.0.368.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.368.0 Safari/533.4 
Chrome 5.0.366.2 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.366.2 Safari/533.4 
Chrome 5.0.366.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.366.0 Safari/533.4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.366.0 Safari/533.4 
Chrome 5.0.363.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.363.0 Safari/533.3 
Chrome 5.0.358.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.358.0 Safari/533.3 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.358.0 Safari/533.3 
Chrome 5.0.357.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.357.0 Safari/533.3 
Chrome 5.0.356.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.356.0 Safari/533.3 
Chrome 5.0.355.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.355.0 Safari/533.3 
Chrome 5.0.354.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.354.0 Safari/533.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.354.0 Safari/533.3 
Chrome 5.0.353.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.353.0 Safari/533.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko) Chrome/5.0.353.0 Safari/533.3 
Chrome 5.0.343.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.343.0 Safari/533.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.343.0 Safari/533.2 
Chrome 5.0.342.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_0; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.7 Safari/533.2 
Chrome 5.0.342.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.5 Safari/533.2 
Chrome 5.0.342.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.3 Safari/533.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.3 Safari/533.2 
Chrome 5.0.342.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.2 Safari/533.2 
Chrome 5.0.342.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.1 Safari/533.2 
Mozilla/5.0 (X11; U; Linux i586; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.1 Safari/533.2 
Chrome 5.0.335.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.1 (KHTML, like Gecko) Chrome/5.0.335.0 Safari/533.1 
Chrome 5.0.310.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Chrome/5.0.310.0 Safari/532.9 
Chrome 5.0.309.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Chrome/5.0.309.0 Safari/532.9 
Chrome 5.0.308.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Chrome/5.0.308.0 Safari/532.9 
Chrome 5.0.307.11 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_0; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Chrome/5.0.307.11 Safari/532.9 
Chrome 5.0.307.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Chrome/5.0.307.1 Safari/532.9 
Chrome 4.1.249.1025 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.1.249.1025 Safari/532.5 
Chrome 4.0.302.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Chrome/4.0.302.2 Safari/532.8 
Chrome 4.0.288.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Chrome/4.0.288.1 Safari/532.8 
Chrome 4.0.277.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Chrome/4.0.277.0 Safari/532.8 
Chrome 4.0.249.30 
Mozilla/5.0 (X11; U; Slackware Linux x86_64; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.0.249.30 Safari/532.5 
Chrome 4.0.249.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.0.249.0 Safari/532.5 
Chrome 4.0.246.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Chrome/4.0.246.0 Safari/532.5 
Chrome 4.0.237.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.4 (KHTML, like Gecko) Chrome/4.0.237.0 Safari/532.4 Debian 
Chrome 4.0.227.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Chrome/4.0.227.0 Safari/532.3 
Chrome 4.0.224.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Chrome/4.0.224.2 Safari/532.3 
Chrome 4.0.223.5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Chrome/4.0.223.5 Safari/532.3 
Chrome 4.0.223.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.4 Safari/532.2 
Chrome 4.0.223.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.3 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE) Chrome/4.0.223.3 Safari/532.2 
Chrome 4.0.223.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.2 Safari/532.2 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.2 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.2 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.2 Safari/532.2 
Chrome 4.0.223.1 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.1 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.1 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.1 Safari/532.2 
Chrome 4.0.223.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.0 Safari/532.2 
Chrome 4.0.222.8 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.8 Safari/532.2 
Chrome 4.0.222.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.7 Safari/532.2 
Chrome 4.0.222.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.6 Safari/532.2 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.6 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.6 Safari/532.2 
Chrome 4.0.222.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.5 Safari/532.2 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.5 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.5 Safari/532.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.5 Safari/532.2 
Chrome 4.0.222.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.4 Safari/532.2 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.4 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.4 Safari/532.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.4 Safari/532.2 
Chrome 4.0.222.3 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.3 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.3 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.3 Safari/532.2 
Chrome 4.0.222.2 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.2 Safari/532.2 
Chrome 4.0.222.12 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.12 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.12 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.12 Safari/532.2 
Chrome 4.0.222.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.1 Safari/532.2 
Chrome 4.0.222.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.222.0 Safari/532.2 
Chrome 4.0.221.8 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.8 Safari/532.2 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.8 Safari/532.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.8 Safari/532.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.8 Safari/532.2 
Chrome 4.0.221.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.7 Safari/532.2 
Chrome 4.0.221.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.6 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.6 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.6 Safari/532.2 
Chrome 4.0.221.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.3 Safari/532.2 
Chrome 4.0.221.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.221.0 Safari/532.2 
Chrome 4.0.220.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.220.1 Safari/532.1 
Chrome 4.0.219.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.6 Safari/532.1 
Chrome 4.0.219.5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.5 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.5 Safari/532.1 
Chrome 4.0.219.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.4 Safari/532.1 
Chrome 4.0.219.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.3 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.3 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.3 Safari/532.1 
Chrome 4.0.219.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.219.0 Safari/532.1 
Chrome 4.0.213.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.1 Safari/532.1 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.1 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.1 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.1 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.1 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.1 Safari/532.1 
Chrome 4.0.213.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.0 Safari/532.1 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.0 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.0 Safari/532.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.213.0 Safari/532.1 
Chrome 4.0.212.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_0; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.212.1 Safari/532.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.212.1 Safari/532.1 
Chrome 4.0.212.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.212.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.1 (KHTML, like Gecko) Chrome/4.0.212.0 Safari/532.1 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.212.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.212.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.212.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.212.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.212.0 Safari/532.0 
Chrome 4.0.211.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.7 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.7 Safari/532.0 
Chrome 4.0.211.4 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.4 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.4 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.4 Safari/532.0 
Chrome 4.0.211.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.2 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.2 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.2 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.2 Safari/532.0 
Chrome 4.0.211.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.211.0 Safari/532.0 
Chrome 4.0.210.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.210.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.210.0 Safari/532.0 
Chrome 4.0.209.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.209.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.209.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.209.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.209.0 Safari/532.0 
Chrome 4.0.208.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.208.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.208.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.208.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.208.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.208.0 Safari/532.0 
Chrome 4.0.207.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.207.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.207.0 Safari/532.0 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.207.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.207.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.207.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.207.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.207.0 Safari/532.0 
Chrome 4.0.206.1 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.1 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.1 Safari/532.0 
Chrome 4.0.206.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.206.0 Safari/532.0 
Chrome 4.0.205.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.205.0 Safari/532.0 
Chrome 4.0.204.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.204.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.204.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.204.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.204.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.204.0 Safari/532.0 
Chrome 4.0.203.4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.4 Safari/532.0 
Chrome 4.0.203.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.2 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.2 Safari/532.0 
Chrome 4.0.203.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.203.0 Safari/532.0 
Chrome 4.0.202.2 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.2 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0 (x86_64); de-DE) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-DE) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.2 Safari/532.0 
Chrome 4.0.202.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/525.13. 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.202.0 Safari/532.0 
Chrome 4.0.201.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.201.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.201.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.201.1 Safari/532.0 
Chrome 3.0.201.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.201.0 Safari/532.0 
Chrome 3.0.198.1 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198.1 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198.1 Safari/532.0 
Chrome 3.0.198.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198.0 Safari/532.0 
Chrome 3.0.198 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198 Safari/532.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.198 Safari/532.0 
Chrome 3.0.197.11 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197.11 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197.11 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197.11 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197.11 Safari/532.0 
Chrome 3.0.197.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197.0 Safari/532.0 
Chrome 3.0.197 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.197 Safari/532.0 
Chrome 3.0.196.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.196.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.196.2 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.196.2 Safari/532.0 
Chrome 3.0.196.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.196.0 Safari/532.0 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.196.0 Safari/532.0 
Chrome 3.0.196 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.196 Safari/532.0 
Chrome 3.0.195.6 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.6 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.6 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.6 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.6 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.6 Safari/532.0 
Chrome 3.0.195.4 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.4 Safari/532.0 
Chrome 3.0.195.33 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.33 Safari/532.0 
Chrome 3.0.195.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.3 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.3 Safari/532.0 
Chrome 3.0.195.27 
Mozilla/6.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.27 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.27 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.27 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.27 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML,like Gecko) Chrome/3.0.195.27 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.27 Safari/532.0 
Chrome 3.0.195.24 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.24 Safari/532.0 
Chrome 3.0.195.21 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.21 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.21 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.21 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.21 Safari/532.0 
Chrome 3.0.195.20 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.20 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.20 Safari/532.0 
Chrome 3.0.195.17 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.17 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.17 Safari/532.0 
Chrome 3.0.195.10 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.10 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.10 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.10 Safari/532.0 
Chrome 3.0.195.1 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.1 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.1 Safari/532.0 
Chrome 3.0.194.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/531.4 (KHTML, like Gecko) Chrome/3.0.194.0 Safari/531.4 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.4 (KHTML, like Gecko) Chrome/3.0.194.0 Safari/531.4 
Chrome 3.0.193.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.3 (KHTML, like Gecko) Chrome/3.0.193.2 Safari/531.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/531.3 (KHTML, like Gecko) Chrome/3.0.193.2 Safari/531.3 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/531.3 (KHTML, like Gecko) Chrome/3.0.193.2 Safari/531.3 
Chrome 3.0.193.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/531.3 (KHTML, like Gecko) Chrome/3.0.193.0 Safari/531.3 
Chrome 3.0.192 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/531.3 (KHTML, like Gecko) Chrome/3.0.192 Safari/531.3 
Chrome 3.0.191.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/531.2 (KHTML, like Gecko) Chrome/3.0.191.3 Safari/531.2 
Chrome 3.0.191.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Chrome/3.0.191.0 Safari/531.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Chrome/3.0.191.0 Safari/531.0 
Chrome 2.0.182.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Chrome/2.0.182.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Chrome/2.0.182.0 Safari/531.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/530.0 (KHTML, like Gecko) Chrome/2.0.182.0 Safari/531.0 
Chrome 2.0.178.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.8 (KHTML, like Gecko) Chrome/2.0.178.0 Safari/530.8 
Chrome 2.0.177.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.8 (KHTML, like Gecko) Chrome/2.0.177.1 Safari/530.8 
Chrome 2.0.177.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.8 (KHTML, like Gecko) Chrome/2.0.177.0 Safari/530.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.7 (KHTML, like Gecko) Chrome/2.0.177.0 Safari/530.7 
Chrome 2.0.176.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.7 (KHTML, like Gecko) Chrome/2.0.176.0 Safari/530.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.7 (KHTML, like Gecko) Chrome/2.0.176.0 Safari/530.7 
Chrome 2.0.175.0 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/530.7 (KHTML, like Gecko) Chrome/2.0.175.0 Safari/530.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.7 (KHTML, like Gecko) Chrome/2.0.175.0 Safari/530.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.6 (KHTML, like Gecko) Chrome/2.0.175.0 Safari/530.6 
Chrome 2.0.174.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/530.6 (KHTML, like Gecko) Chrome/2.0.174.0 Safari/530.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.6 (KHTML, like Gecko) Chrome/2.0.174.0 Safari/530.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.6 (KHTML, like Gecko) Chrome/2.0.174.0 Safari/530.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.174.0 Safari/530.5 
Chrome 2.0.173.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.173.1 Safari/530.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.173.1 Safari/530.5 
Chrome 2.0.173.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.173.0 Safari/530.5 
Chrome 2.0.172.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.8 Safari/530.5 
Chrome 2.0.172.6 
Mozilla/6.0 (Windows; U; Windows NT 6.0; en-US) Gecko/2009032609 Chrome/2.0.172.6 Safari/530.7 
Mozilla/6.0 (Windows; U; Windows NT 6.0; en-US) Gecko/2009032609 (KHTML, like Gecko) Chrome/2.0.172.6 Safari/530.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.6 Safari/530.5 
Chrome 2.0.172.43 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.43 Safari/530.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.43 Safari/530.5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.43 Safari/530.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.43 Safari/530.5 
Chrome 2.0.172.42 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.42 Safari/530.5 
Chrome 2.0.172.40 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.40 Safari/530.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.40 Safari/530.5 
Chrome 2.0.172.39 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.39 Safari/530.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.39 Safari/530.5 
Chrome 2.0.172.23 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.23 Safari/530.5 
Chrome 2.0.172.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.2 Safari/530.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.2 Safari/530.5 
Chrome 2.0.172.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/530.4 (KHTML, like Gecko) Chrome/2.0.172.0 Safari/530.4 
Mozilla/5.0 (Windows; U; Windows NT 5.2; eu) AppleWebKit/530.4 (KHTML, like Gecko) Chrome/2.0.172.0 Safari/530.4 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/530.4 (KHTML, like Gecko) Chrome/2.0.172.0 Safari/530.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.0 Safari/530.5 
Chrome 2.0.171.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.4 (KHTML, like Gecko) Chrome/2.0.171.0 Safari/530.4 
Chrome 2.0.170.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.1 (KHTML, like Gecko) Chrome/2.0.170.0 Safari/530.1 
Chrome 2.0.169.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.1 (KHTML, like Gecko) Chrome/2.0.169.0 Safari/530.1 
Chrome 2.0.168.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.1 (KHTML, like Gecko) Chrome/2.0.168.0 Safari/530.1 
Chrome 2.0.164.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.1 (KHTML, like Gecko) Chrome/2.0.164.0 Safari/530.1 
Chrome 2.0.162.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.0 (KHTML, like Gecko) Chrome/2.0.162.0 Safari/530.0 
Chrome 2.0.160.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.0 (KHTML, like Gecko) Chrome/2.0.160.0 Safari/530.0 
Chrome 2.0.157.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.10 (KHTML, like Gecko) Chrome/2.0.157.2 Safari/528.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.10 (KHTML, like Gecko) Chrome/2.0.157.2 Safari/528.10 
Chrome 2.0.157.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.11 (KHTML, like Gecko) Chrome/2.0.157.0 Safari/528.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.9 (KHTML, like Gecko) Chrome/2.0.157.0 Safari/528.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.11 (KHTML, like Gecko) Chrome/2.0.157.0 Safari/528.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.10 (KHTML, like Gecko) Chrome/2.0.157.0 Safari/528.10 
Chrome 2.0.156.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/528.8 (KHTML, like Gecko) Chrome/2.0.156.1 Safari/528.8 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.8 (KHTML, like Gecko) Chrome/2.0.156.1 Safari/528.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.8 (KHTML, like Gecko) Chrome/2.0.156.1 Safari/528.8 
Chrome 2.0.156.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.8 (KHTML, like Gecko) Chrome/2.0.156.0 Version/3.2.1 Safari/528.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.8 (KHTML, like Gecko) Chrome/2.0.156.0 Safari/528.8 
Chrome 1.0.156.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/528.8 (KHTML, like Gecko) Chrome/1.0.156.0 Safari/528.8 
Chrome 1.0.154.59 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.59 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.59 Safari/525.19 
Mozilla/4.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.59 Safari/525.19 
Chrome 1.0.154.55 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.55 Safari/525.19 
Chrome 1.0.154.53 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.53 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.53 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.53 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.53 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.53 Safari/525.19 
Chrome 1.0.154.50 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.50 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.50 Safari/525.19 
Chrome 1.0.154.48 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.48 Safari/525.19 
Chrome 1.0.154.46 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.46 Safari/525.19 
Chrome 1.0.154.43 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.43 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.43 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.43 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.43 Safari/525.19 
Chrome 1.0.154.42 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.42 Safari/525.19 
Chrome 1.0.154.39 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.39 Safari/525.19 
Chrome 0.4.154.31 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.4.154.31 Safari/525.19 
Chrome 0.4.154.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.4.154.18 Safari/525.19 
Chrome 0.3.155.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.4 (KHTML, like Gecko) Chrome/0.3.155.0 Safari/528.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.3.155.0 Safari/525.19 
Chrome 0.3.154.9 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.3.154.9 Safari/525.19 
Chrome 0.3.154.6 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.3.154.6 Safari/525.19 
Chrome 0.2.153.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.153.1 Safari/525.19 
Chrome 0.2.153.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.153.0 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.153.0 Safari/525.19 
Chrome 0.2.152.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.152.0 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.152.0 Safari/525.19 
Chrome 0.2.151.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.151.0 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.151.0 Safari/525.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/0.2.151.0 Safari/525.19 
Chrome 0.2.149.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.6 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.6 Safari/525.13 
Chrome 0.2.149.30 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.30 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.30 Safari/525.13 
Chrome 0.2.149.29 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.29 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.29 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.29 Safari/525.13 
Chrome 0.2.149.27 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13(KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13 
Mozilla/5.0 (Linux; U; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13 
Chrome 
Mozilla/5.0 (Macintosh; U; Mac OS X 10_6_1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/ Safari/530.5 
Mozilla/5.0 (Macintosh; U; Mac OS X 10_5_7; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/ Safari/530.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-US) AppleWebKit/530.9 (KHTML, like Gecko) Chrome/ Safari/530.9 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-US) AppleWebKit/530.6 (KHTML, like Gecko) Chrome/ Safari/530.6 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/ Safari/530.5 
ChromePlus 
ChromePlus has all the functionalities that Google Chrome has plus some features such as Mouse gesture, Super drag, IE tab, etc.

Click on any string to get more details

ChromePlus 4.0.222.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) ChromePlus/4.0.222.3 Chrome/4.0.222.3 Safari/532.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.28.3 (KHTML, like Gecko) Version/3.2.3 ChromePlus/4.0.222.3 Chrome/4.0.222.3 Safari/525.28.3 
ChromePlus 1.3.8.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.1 (KHTML, like Gecko) Chrome/5.0.336.0 Safari/533.1 ChromePlus/1.3.8.1 
CometBird

Click on any string to get more details

CometBird 3.0.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2009011615 Firefox/3.0.5 CometBird/3.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.5) Gecko/2009011615 Firefox/3.0.5 CometBird/3.0.5 
Crazy Browser

Click on any string to get more details

Crazy Browser 3.0.0 Beta2 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; InfoPath.2; .NET CLR 2.0.50727; .NET CLR 1.1.4322; Crazy Browser 3.0.0 Beta2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Crazy Browser 3.0.0 Beta2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.2; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; Crazy Browser 3.0.0 Beta2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Crazy Browser 3.0.0 Beta2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Crazy Browser 3.0.0 Beta2) 
Crazy Browser 2.0.1 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Avant Browser; .NET CLR 2.0.50727; .NET CLR 3.0.04506.590; .NET CLR 3.5.20706; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.1; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Alexa Toolbar; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; HbTools 4.7.0; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; (R1 1.3; Crazy Browser 2.0.1); .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Q312461; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Q312461; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Media Center PC 3.0; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322; Crazy Browser 2.0.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 1.1.4322; Crazy Browser 2.0.1) 
Crazy Browser 2.0.0 Beta 1 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 2.0.0 Beta 1; .NET CLR 1.0.3705) 
Crazy Browser 2.0.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; Crazy Browser 2.0.0) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Crazy Browser 2.0.0) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322; Crazy Browser 2.0.0) 
Crazy Browser 1.x.x 
Mozilla/4.0 (compatible; MSIE 5.5; Windows 98; Crazy Browser 1.x.x) 
Crazy Browser 1.0.5 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; YComp 5.0.0.0; Crazy Browser 1.0.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 1.0.5; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 1.0.5; .NET CLR 1.1.4322; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 1.0.5; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 1.0.5; .NET CLR 1.0.3705; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 1.0.5; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 1.0.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Q312461; Crazy Browser 1.0.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MyIE2; Crazy Browser 1.0.5; .NET CLR 1.0.3705; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Hotbar 4.3.1.0; Crazy Browser 1.0.5; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; FunWebProducts-MyWay; SV1; Crazy Browser 1.0.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; DigExt; Crazy Browser 1.0.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 1.0.5; .NET CLR 2.0.40607; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 1.0.5; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 1.0.5; .NET CLR 1.0.3705; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 1.0.5; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 1.0.5; (R1 1.3)) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 1.0.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Avant Browser [avantbrowser.com]; Crazy Browser 1.0.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; Q312461; Crazy Browser 1.0.5; .NET CLR 1.0.3705)

More Crazy Browser 1.0.5 user agents strings –>>

Cyberdog

Click on any string to get more details

Cyberdog 2.0 
Cyberdog/2.0 (Macintosh; 68k) 
Deepnet Explorer

Click on any string to get more details

Deepnet Explorer 1.5.3 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Deepnet Explorer 1.5.3; Smart 2×2; .NET CLR 2.0.50727; .NET CLR 1.1.4322; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Deepnet Explorer 1.5.3; Smart 2×2; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Deepnet Explorer 1.5.3; Smart 2×2; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Deepnet Explorer 1.5.3; Smart 2×2) 
Deepnet Explorer 1.5.2 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Deepnet Explorer 1.5.2; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; FunWebProducts; Deepnet Explorer 1.5.2; SpamBlockerUtility 4.7.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Deepnet Explorer 1.5.2; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Deepnet Explorer 1.5.2; .NET CLR 1.1.4322) 
Deepnet Explorer 1.5.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Deepnet Explorer 1.5.0; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Deepnet Explorer 1.5.0; .NET CLR 2.0.50727) 
DeskBrowse 
Open source web browser for Mac OS X that had been dead for a while.

Click on any string to get more details

DeskBrowse 1.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-pl) AppleWebKit/312.8 (KHTML, like Gecko, Safari) DeskBrowse/1.0 
Dillo 
The Dillo project

Click on any string to get more details

Dillo 2.0 
Dillo/2.0 
Dillo 0.8.6-i18n-misc 
Dillo/0.8.6-i18n-misc 
Dillo 0.8.6 
Dillo/0.8.6 
Dillo 0.8.5-i18n-misc 
Dillo/0.8.5-i18n-misc 
Dillo 0.8.5 
Dillo/0.8.5 
Dillo 0.8.3 
Dillo/0.8.3 
Dillo 0.7.3 
Dillo/0.7.3 
Dillo 0.6.4 
Dillo/0.6.4 
Elinks 
Text WWW Browser based on Links

Click on any string to get more details

Elinks 0.9.3 
ELinks/0.9.3 (textmode; Linux 2.6.9-kanotix-8 i686; 127×41) 
ELinks/0.9.3 (textmode; Linux 2.6.11-auditor-10 i686; 80×24) 
ELinks/0.9.3 (textmode; Linux 2.6.11 i686; 79×24) 
Elinks 0.4pre6 
ELinks (0.4pre6; Linux 2.2.19ext3 alpha; 80×25) 
Elinks 0.4pre5 
ELinks (0.4pre5; Linux 2.6.10-ac7 i686; 80×33) 
Elinks 0.4.3 
ELinks (0.4.3; NetBSD 3.0.2_PATCH sparc64; 80×25) 
ELinks (0.4.3; NetBSD 3.0.2_PATCH sparc64; 80×24) 
ELinks (0.4.3; NetBSD 3.0.2_PATCH sparc64; 143×45) 
ELinks (0.4.3; NetBSD 3.0.2_PATCH sparc64; 126×14) 
Elinks 0.3.2 
Elinks (0.3.2; Linux 2.4.20-13.8 i686) 
Elinks 0.13.GIT 
ELinks/0.13.GIT (textmode; Linux 2.6.29 i686; 119×51-2) 
ELinks/0.13.GIT (textmode; Linux 2.6.27-rc6.git i686; 175×65-3) 
ELinks/0.13.GIT (textmode; Linux 2.6.26-rc7.1 i686; 119×68-3) 
ELinks/0.13.GIT (textmode; Linux 2.6.24-1-686 i686; 175×65-2) 
ELinks/0.13.GIT (textmode; Linux 2.6.24-1-686 i686; 138×60-2) 
ELinks/0.13.GIT (textmode; Linux 2.6.22-3-686 i686; 84×37-2) 
ELinks/0.13.GIT (textmode; Linux 2.6.22-3-686 i686; 104×48-2) 
ELinks/0.13.GIT (textmode; Linux 2.6.22-2-686 i686; 148×68-3) 
Elinks 0.12~pre5-1-lite 
ELinks/0.12~pre5-1-lite (textmode; Debian; Linux 2.6.31-1+e517a5e9 x86_64; 100×45-2) 
Elinks 0.12~pre2.dfsg0-1ubu 
ELinks/0.12~pre2.dfsg0-1ubuntu1 (textmode; Debian; Linux 2.6.28-15-generic x86_64; 207×60-2) 
ELinks/0.12~pre2.dfsg0-1ubuntu1 (textmode; Debian; Linux 2.6.28-15-generic i686; 80×24-3) 
ELinks/0.12~pre2.dfsg0-1ubuntu1 (textmode; Debian; Linux 2.6.28-14-generic i686; 180×56-2) 
ELinks/0.12~pre2.dfsg0-1ubuntu1 (textmode; Debian; Linux 2.6.28-14-generic i686; 120×36-2) 
ELinks/0.12~pre2.dfsg0-1ubuntu1 (textmode; Debian; Linux 2.6.28-13-generic i686; 114×36-2) 
Elinks 0.12pre1.GIT 
ELinks/0.12pre1.GIT 
Elinks 0.12.GIT 
ELinks/0.12.GIT (textmode; Linux 2.6.21-1-686 i686; 198×78-3) 
Elinks 0.11.7 
ELinks/0.11.7 (textmode; Linux 2.6.32-fw3 i686; 143×53-2) 
ELinks/0.11.7 (textmode; FreeBSD 8.0-RC1 i386; 80×49-2) 
Elinks 0.11.6 
ELinks/0.11.6 (textmode; Linux 2.6.30-ARCH i686; 128×48-2) 
ELinks/0.11.6 (textmode; Linux 2.2.26 i686; 119×51-2) 
Elinks 0.11.4rc1 
ELinks/0.11.4rc1 (textmode; FreeBSD 7.1-RELEASE i386; 80×25-2) 
ELinks/0.11.4rc1 (textmode; FreeBSD 7.0-RELEASE i386; 80×25-2) 
ELinks/0.11.4rc1 (textmode; Darwin 8.11.0 Power Macintosh; 169×55-3) 
Elinks 0.11.4rc0 
ELinks/0.11.4rc0 (textmode; Linux 2.6.20-16-server i686; 102×34-2) 
Elinks 0.11.4-3-lite 
ELinks/0.11.4-3-lite (textmode; Debian; Linux 2.6.26-1-686 i686; 80×24-2) 
Elinks 0.11.4-3 
ELinks/0.11.4-3 (textmode; Debian; Linux 2.6.26-1-sparc64 sparc64; 160×64-2) 
Elinks 0.11.4 
ELinks/0.11.4 (textmode;Linux;80×24-2) 
ELinks/0.11.4 (textmode; Linux; 80×24-2) 
Elinks 0.11.3-8ubuntu3 
ELinks/0.11.3-8ubuntu3 (textmode; Debian; Linux 2.6.27-9-generic i686; 205×56-2) 
ELinks/0.11.3-8ubuntu3 (textmode; Debian; Linux 2.6.27-11-generic i686; 80×25-2) 
Elinks 0.11.3-5ubuntu2 
ELinks/0.11.3-5ubuntu2 (textmode; Debian; Linux 2.6.24-19-generic i686; 80×24-2) 
ELinks/0.11.3-5ubuntu2 (textmode; Debian; Linux 2.6.24-19-generic i686; 181×51-2) 
ELinks/0.11.3-5ubuntu2 (textmode; Debian; Linux 2.6.24-16-generic i686; 80×24-2) 
Elinks 0.11.3 
ELinks/0.11.3 (textmode; Linux; 80×24-2) 
ELinks/0.11.3 (textmode; Linux 2.6.23-ARCH x86_64; 141×29-2) 
ELinks/0.11.3 (textmode; Darwin 10.2.0 i386; 80×24-2) 
ELinks (0.11.3; Linux 2.6.23-hardened-r4 i686; 166×55) 
ELinks (0.11.3; Linux 2.6.23-hardened-r4 i686; 132×25) 
ELinks (0.11.3; Linux 2.6.23-gentoo-r6 i686; 128×48) 
ELinks (0.11.3; Linux 2.6.22-gentoo-r9 i686; 80×40) 
Elinks 0.11.2 
ELinks/0.11.2 (textmode; Linux 2.6.17.13 i686; 80×25-2) 
ELinks/0.11.2 (textmode; FreeBSD 6.3-RELEASE-p2 i386; 126×44-2) 
ELinks/0.11.2 (textmode; FreeBSD 6.2-RELEASE i386; 100×35-2) 
Elinks 0.11.1-1.5ubuntu1-de 
ELinks/0.11.1-1.5ubuntu1-debian (textmode; Linux 2.6.22-14-server i686; 157×41-2) 
ELinks/0.11.1-1.5ubuntu1-debian (textmode; Linux 2.6.22-14-generic i686; 80×24-3) 
ELinks/0.11.1-1.5ubuntu1-debian (textmode; Linux 2.6.22-14-generic i686; 80×24-2) 
Elinks 0.11.1-1.4-debian 
ELinks/0.11.1-1.4-debian (textmode; Linux 2.6.22-2-686 i686; 64×24-2) 
ELinks/0.11.1-1.4-debian (textmode; Linux 2.6.22-1-amd64 x86_64; 160×64-2) 
ELinks/0.11.1-1.4-debian (textmode; Linux 2.6.21-1-686 i686; 198×78-3) 
Elinks 0.11.1-1.2ubuntu2.2- 
ELinks/0.11.1-1.2ubuntu2.2-debian (textmode; Linux 2.6.20-16-generic i686; 80×24-2) 
Elinks 0.11.1-1.2ubuntu2.1- 
ELinks/0.11.1-1.2ubuntu2.1-debian (textmode; Linux 2.6.20-15-generic i686; 80×24-2) 
Elinks 0.11.1-1.2etch1-debi 
ELinks/0.11.1-1.2etch1-debian (textmode; Linux 2.6.24.2-grsec i686; 80×24-2) 
Elinks 0.11.1-1.2-debian 
ELinks/0.11.1-1.2-debian (textmode; Linux 2.6.8-3-386 i686; 80×24-2) 
ELinks/0.11.1-1.2-debian (textmode; Linux 2.6.15-1-k7 i686; 80×38-2) 
Elinks 0.11.1-1-debian 
ELinks/0.11.1-1-debian (textmode; Linux 2.6.18-2-k7 i686; 142×42-2) 
Elinks 0.11.1 
ELinks/0.11.1 (textmode; Linux; 122×44-2) 
ELinks/0.11.1 (textmode; Linux 2.6.12-oci6.mdk-i586-up-1GB i686; 98×33-2) 
ELinks/0.11.1 (textmode; Linux 2.6.12-oci6.mdk-i586-up-1GB i686; 97×33-2) 
ELinks/0.11.1 (textmode; Linux 2.6.12-oci6.mdk-i586-up-1GB i686; 80×24-2) 
ELinks/0.11.1 (textmode; Linux 2.6.12-oci6.mdk-i586-up-1GB i686; 127×43-2) 
ELinks/0.11.1 (textmode; Linux 2.4.31 i686; 128×48-3) 
ELinks/0.11.1 (textmode; FreeBSD 6.1-RELEASE i386; 212×61-2) 
ELinks (0.11.1; Linux 2.4.31 i686) 
Elinks 0.11.0 
ELinks/0.11.0 (textmode; Linux; 100×24-2) 
Elinks 0.10.6-1ubuntu3-debi 
ELinks/0.10.6-1ubuntu3-debian (textmode; Linux 2.6.15-27-686 i686; 96×28-2) 
ELinks/0.10.6-1ubuntu3-debian (textmode; Linux 2.6.15-27-686 i686; 197×64-2) 
Elinks 0.10.6 
ELinks/0.10.6 (textmode; Linux 2.6.12-oci6.mdk-i586-up-1GB i686; 104×37-2) 
Elinks 0.10.4-7-debian 
ELinks/0.10.4-7-debian (textmode; Linux 2.6.16-hardened-r10-pandora i686; 80×24-2) 
ELinks/0.10.4-7-debian (textmode; Linux 2.6.11 i686; 89×23-2) 
Elinks 0.10.3 
ELinks/0.10.3 (textmode; Linux; 80×24-2) 
ELinks/0.10.3 (textmode; Linux; 123×38-2) 
Elinks 
Elinks (textmode) 
Enigma Browser 
The Enigma Browser from Advanced Search Technologies. Previously a shareware Internet Explorer shell but is now freeware. It uses Internet Explorer’s Trident layout

Click on any string to get more details

Enigma Browser 
Enigma Browser 
Epiphany

Click on any string to get more details

Epiphany 2.30.0 
Mozilla/5.0 (X11; U; FreeBSD amd64; en-us) AppleWebKit/531.2+ (KHTML, like Gecko) Safari/531.2+ Epiphany/2.30.0 
Epiphany 2.29.91 
Mozilla/5.0 (X11; U; Linux x86_64; nl-nl) AppleWebKit/531.2+ (KHTML, like Gecko) Safari/531.2+ Epiphany/2.29.91 
Mozilla/5.0 (X11; U; Linux x86_64; fr-fr) AppleWebKit/531.2+ (KHTML, like Gecko) Safari/531.2+ Epiphany/2.29.91 
Epiphany 2.28.2 
Mozilla/5.0 (X11; U; Linux x86_64; zh-cn) AppleWebKit/531.2+ (KHTML, like Gecko) Safari/531.2+ Epiphany/2.28.2 SUSE/2.28.0-2.4 
Epiphany 2.28.0 
Mozilla/5.0 (X11; U; Linux x86_64; zh-cn) AppleWebKit/531.2+ (KHTML, like Gecko) Safari/531.2+ Epiphany/2.28.0 SUSE/2.28.0-2.4 
Epiphany 2.22 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.8) Gecko/20080528 Fedora/2.24.3-4.fc10 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.8) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.8) Gecko/20080528 Epiphany/2.22 (Debian/2.24.3-2) 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.7) Gecko/20080528 Epiphany/2.22 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.14) Gecko/20080528 Ubuntu/9.10 (karmic) Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.14) Gecko/20080528 Epiphany/2.22 (Debian/2.26.3-2) 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9.0.1) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.9) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.8.1.13) Gecko/20080322 Epiphany/2.22 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; en_GB; rv:1.9.0.1) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.9) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.8) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.8) Gecko/20080528 Epiphany/2.22 (Debian/2.24.3-2) 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.7) Gecko/20080528 Epiphany/2.22 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.5) Gecko/20080528 Fedora/2.24.1-3.fc10 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.4) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.15) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.12) Gecko/20080528 Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9) Gecko/20080528 (Gentoo) Epiphany/2.22 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.3) Gecko/20080629 Epiphany/2.22 Firefox/2.0.0.4

More Epiphany 2.22 user agents strings –>>

Epiphany 2.20 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.8.1.14) Gecko/20080616 Fedora/2.20.3-4.fc8 Epiphany/2.20 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.8.1.13) Gecko/20080326 (Debian-1.8.1.13-1) Epiphany/2.20 
Mozilla/5.0 (X11; U; Linux ppc; en; rv:1.8.1.13) Gecko/20080325 Epiphany/2.20 Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9b3) Gecko Epiphany/2.20 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.19) Gecko/20081216 Epiphany/2.20 Firefox/2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.17) Gecko/20080927 Epiphany/2.20 Firefox/2.0.0.17 (Dropline GNOME) 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.14) Gecko/20080418 Epiphany/2.20 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.12) Gecko/20080208 (Debian-1.8.1.12-5) Epiphany/2.20 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.12) Gecko/20080208 (Debian-1.8.1.12-2) Epiphany/2.20 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.10) Gecko/20071213 Epiphany/2.20 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; FreeBSD i386; pl; rv:1.8.1.12) Gecko/20080213 Epiphany/2.20 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; FreeBSD i386; en; rv:1.8.1.12) Gecko/20080213 Epiphany/2.20 Firefox/2.0.0.12 
Epiphany 2.18 
Mozilla/5.0 (X11; U; OpenBSD amd64; en; rv:1.8.1.6) Gecko/20070817 Epiphany/2.18 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.8.1.4) Gecko/20061201 Epiphany/2.18 Firefox/2.0.0.4 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.8.1.3) Gecko/20061201 Epiphany/2.18 Firefox/2.0.0.3 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.5) Gecko/20070712 (Debian-1.8.1.5-1) Epiphany/2.18 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.4) Gecko/20070508 (Debian-1.8.1.4-1) Epiphany/2.18 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.3) Gecko/20070322 Epiphany/2.18 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.3) Gecko/20061201 Epiphany/2.18 Firefox/2.0.0.3 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.14) Gecko/20080416 Fedora/2.18.3-9.fc7 Epiphany/2.18 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.1) Gecko/20070322 Epiphany/2.18 
Epiphany 2.16 
Mozilla/5.0 (X11; U; Linux x86_64; en; rv:1.8.1.4) Gecko/20070628 Epiphany/2.16 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.3) Gecko/20070403 Epiphany/2.16 Firefox/2.0.0.3 
Epiphany 2.14 
Mozilla/5.0 (X11; U; Linux sparc64; en-US; rv:1.8.0.14eol) Gecko/20070505 (Debian-1.8.0.15~pre080323b-0etch2) Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.0.7) Gecko/20060928 Epiphany/2.14 (Ubuntu) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071201 (Debian-1.8.1.11-1) Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20061205 (Debian-1.8.0.9-1) Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.7) Gecko/20060928 (Debian-1.8.0.7-1) Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.7) Gecko/20060924 Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Epiphany/2.14 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Epiphany/2.14 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.3) Gecko/20060523 Ubuntu/dapper Epiphany/2.14 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.13pre) Gecko/20070505 (Debian-1.8.0.15~pre080131b-0etch1) Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.13pre) Gecko/20070505 (Debian-1.8.0.14~pre071019b-0lenny1) Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.13) Gecko/20060501 Epiphany/2.14 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.7) Gecko/20060928 (Debian-1.8.0.7-1) Epiphany/2.14 
Epiphany 1.8.4.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051215 Epiphany/1.8.4.1 
Epiphany 1.8.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20060208 Epiphany/1.8.3 
Epiphany 1.8.2 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.7.12) Gecko/20051010 Epiphany/1.8.2 (Ubuntu) (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051010 Epiphany/1.8.2 (Ubuntu) (Ubuntu package 1.0.7) 
Epiphany 1.7.1 
Mozilla/5.0 (X11; U; SunOS 5.11; en-US; rv:1.8.0.2) Gecko/20050405 Epiphany/1.7.1 
Epiphany 1.4.8 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.5) Gecko/20050105 Epiphany/1.4.8 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.8) Gecko/20060628 Epiphany/1.4.8 (Debian) 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.8) Gecko/20050831 Epiphany/1.4.8 (Debian) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050927 Epiphany/1.4.8 (Debian) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050831 Epiphany/1.4.8 (Debian) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050513 Epiphany/1.4.8 (Debian) 
Epiphany 1.4.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.3) Gecko/20041007 Epiphany/1.4.7 
Epiphany 1.4.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.3) Gecko/20040924 Epiphany/1.4.4 (Ubuntu) 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.7.3) Gecko/20040924 Epiphany/1.4.4 (Ubuntu) 
Epiphany 1.2.6 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.6) Gecko/20040413 Epiphany/1.2.6 
Epiphany 1.2.5 
Mozilla/5.0 (X11; U; Linux; i686; en-US; rv:1.6) Gecko Epiphany/1.2.5 
Epiphany 1.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.6) Gecko/20040114 Epiphany/1.0.7 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.6) Gecko/20040114 Epiphany/1.0.7 
Epiphany 0.9.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030908 Epiphany/0.9.2 
Epiphany 
Mozilla/5.0 (X11; U; Linux i686; pl-pl) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) epiphany-browser 
Mozilla/5.0 (X11; U; Linux i686; en-gb) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) epiphany-webkit 
Fennec 
Fennec is the code name of the effort to build a mobile version of Firefox.

Click on any string to get more details

Fennec 1.0b2pre 
Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.2a1pre) Gecko/20090322 Fennec/1.0b2pre 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.17) Gecko/20080829 Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.2a1pre) Gecko/20090322 Fennec/1.0b2pre 
Fennec 1.0b2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2a1pre) Gecko/20090626 Fennec/1.0b2 
Fennec 1.0b1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2a1pre) Gecko/20090317 Fennec/1.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090317 Fennec/1.0b1 
Fennec 1.0a2pre 
Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9.1b2pre) Gecko/20081116 Fennec/1.0a2pre 
Mozilla/5.0 (X11; U; Linux armv61; en-US; rv:1.9.1b2pre) Gecko/20081116 Fennec/1.0a2pre 
Fennec 1.0a2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a1pre) Gecko/20081222 Fennec/1.0a2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b4pre) Gecko/20090401 Fennec/1.0a2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b3pre) Gecko/20090106 Fennec/1.0a2 
Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9.2a1pre) Gecko/20081222 Fennec/1.0a2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20081222 Fennec/1.0a2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20081222 Fennec/1.0a2 
Fennec 1.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b2pre) Gecko/20081015 Fennec/1.0a1 
Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9.1b2pre) Gecko/20081015 Fennec/1.0a1 
Mozilla/5.0 (X11; U; Linux armv61; en-US; rv:1.9.1b2pre) Gecko/20081015 Fennec/1.0a1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b2pre) Gecko/20081015 Fennec/1.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b2pre) Gecko/20081015 Fennec/1.0a1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.1b2pre) Gecko/20081015 Fennec/1.0a1 
Fennec 0.9pre 
Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9.1b1pre) Gecko/20081005220218 Gecko/2008052201 Fennec/0.9pre 
Fennec 0.8 
Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9.1b1pre) Gecko/20080923171103 Fennec/0.8 
Fennec 0.7 
Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9.1a2pre) Gecko/20080820121708 Fennec/0.7 
Fennec 0.5 
Mozilla/5.0 (X11; U; Linux armv6l; en-US; rv:1.9.1a1pre) Gecko/2008071707 Fennec/0.5 
Fennec 0.11 
Mozilla/5.0 (Windows; U; Windows CE 5.2; en-US; rv:1.9.2a1pre) Gecko/20090210 Fennec/0.11 
Firebird 
Former name of the Mozilla Firefox browser (also formerly known as Phoenix)

Click on any string to get more details

Firebird 0.7+ 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.6b) Gecko/20031212 Firebird/0.7+ 
Firebird 0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.6a) Gecko/20031002 Firebird/0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5) Gecko/20031007 Firebird/0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.5) Gecko/20031007 Firebird/0.7 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.5) Gecko/20031007 Firebird/0.7 
Mozilla/5.0 (Windows; U; Win95; en-US; rv:1.5) Gecko/20031007 Firebird/0.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.5) Gecko/20031026 Firebird/0.7 
Firebird 0.6.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.5a) Gecko/20030729 Mozilla Firebird/0.6.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.5a) Gecko/20030728 Mozilla Firebird/0.6.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.5a) Gecko/20030728 Mozilla Firebird/0.6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5b) Gecko/20030819 Mozilla Firebird/0.6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5a) Gecko/20030728 Mozilla Firebird/0.6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.5a) Gecko/20030728 Mozilla Firebird/0.6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.5a) Gecko/20030728 Mozilla Firebird/0.6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.5a) Gecko/20030728 Mozilla Firebird/0.6.1 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.5a) Gecko/20030728 Mozilla Firebird/0.6.1 
Firebird 0.6 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.4b) Gecko/20030517 Mozilla Firebird/0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4b) Gecko/20030630 Mozilla Firebird/0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4b) Gecko/20030607 Mozilla Firebird/0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4b) Gecko/20030516 Mozilla Firebird/0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4b) Gecko/20030505 Mozilla Firebird/0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4a) Gecko/20030425 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.4b) Gecko/20030610 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:x.xx) Gecko/20030504 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5a) Gecko/20030702 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5a) Gecko/20030630 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4b) Gecko/20030615 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4b) Gecko/20030516 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4b) Gecko/20030503 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.4b) Gecko/20030516 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4b) Gecko/20030516 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4b) Gecko/20030514 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4b) Gecko/20030504 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.4b) Gecko/20030516 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.4b) Gecko/20030516 Mozilla Firebird/0.6 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.4b) Gecko/20030516 Mozilla Firebird/0.6 
Firefox

Click on any string to get more details

Firefox Debian-2.0.0.19-0etc 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081202 Firefox (Debian-2.0.0.19-0etch1) 
Firefox 3.8 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.2) Gecko/20121223 Ubuntu/9.25 (jaunty) Firefox/3.8 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.2) Gecko/2008092313 Ubuntu/9.25 (jaunty) Firefox/3.8 
Mozilla/5.0 (X11; U; Linux i686; it-IT; rv:1.9.0.2) Gecko/2008092313 Ubuntu/9.25 (jaunty) Firefox/3.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.3) Gecko/20100401 Mozilla/5.0 (X11; U; Linux i686; it-IT; rv:1.9.0.2) Gecko/2008092313 Ubuntu/9.25 (jaunty) Firefox/3.8 
Firefox 3.6b5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ru; rv:1.9.2b5) Gecko/20091204 Firefox/3.6b5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2b5) Gecko/20091204 Firefox/3.6b5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.2b5) Gecko/20091204 Firefox/3.6b5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2) Gecko/20091218 Firefox 3.6b5 
Firefox 3.6b4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.2b4) Gecko/20091124 Firefox/3.6b4 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2b4) Gecko/20091124 Firefox/3.6b4 
Firefox 3.6b1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2b1) Gecko/20091014 Firefox/3.6b1 GTB5 
Firefox 3.6a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090428 Firefox/3.6a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090405 Firefox/3.6a1pre 
Mozilla/5.0 (X11; U; Linux i686; ru-RU; rv:1.9.2a1pre) Gecko/20090405 Ubuntu/9.04 (jaunty) Firefox/3.6a1pre 
Mozilla/5.0 (Windows; Windows NT 5.1; es-ES; rv:1.9.2a1pre) Gecko/20090402 Firefox/3.6a1pre 
Mozilla/5.0 (Windows; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090402 Firefox/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.9.2a1pre) Gecko/20090402 Firefox/3.6a1pre (.NET CLR 3.5.30729) 
Firefox 3.6.4 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ru; rv:1.9.2.4) Gecko/20100513 Firefox/3.6.4 
Firefox 3.6.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.3) Gecko/20100403 Firefox/3.6.3 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.2.3) Gecko/20100401 SUSE/3.6.3-1.1 Firefox/3.6.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.3) Gecko/20100404 Ubuntu/10.04 (lucid) Firefox/3.6.3 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.2.3) Gecko/20100423 Ubuntu/10.04 (lucid) Firefox/3.6.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-CN; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ru; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; pl; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; it; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; es-ES; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ca; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sv-SE; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; nl; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB7.0 ( .NET CLR 3.5.30729; .NET4.0E) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB7.0 ( .NET CLR 3.5.30729; .NET4.0E) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 ( .NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; zh-CN; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3

More Firefox 3.6.3 user agents strings –>>

Firefox 3.6.2 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; fr; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 GTB7.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 GTB6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.7; en-US; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 
Firefox 3.6.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.1) Gecko/20100122 firefox/3.6.1 
Firefox 3.6 
Mozilla/5.0(Windows; U; Windows NT 5.2; rv:1.9.2) Gecko/20100101 Firefox/3.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2) Gecko/20100222 Ubuntu/10.04 (lucid) Firefox/3.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2) Gecko/20100130 Gentoo Firefox/3.6 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.2) Gecko/20100308 Ubuntu/10.04 (lucid) Firefox/3.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.2pre) Gecko/20100312 Ubuntu/9.04 (jaunty) Firefox/3.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2) Gecko/20100128 Gentoo Firefox/3.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2) Gecko/20100115 Ubuntu/10.04 (lucid) Firefox/3.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 FirePHP/0.4 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ru-RU; rv:1.9.2) Gecko/20100105 MRA 5.6 (build 03278) Firefox/3.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; lt; rv:1.9.2) Gecko/20100115 Firefox/3.6 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.3a3pre) Gecko/20100306 Firefox3.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ar; rv:1.9.2) Gecko/20100115 Firefox/3.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.2) Gecko/20100115 Firefox/3.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.2) Gecko/20100105 Firefox/3.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl; rv:1.9.2) Gecko/20100115 Firefox/3.6 ( .NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; zh-CN; rv:1.9.2) Gecko/20100101 Firefox/3.6 
Mozilla/5.0 (Windows; U; Windows NT 5.2; zh-CN; rv:1.9.2) Gecko/20091111 Firefox/3.6 
Mozilla/5.0 (Windows; U; Windows NT 5.2; rv:1.9.2) Gecko/20100101 Firefox/3.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.2) Gecko/20100115 Firefox/3.6 ( .NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-PT; rv:1.9.2) Gecko/20100115 Firefox/3.6

More Firefox 3.6 user agents strings –>>

Firefox 3.5b4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b5pre) Gecko/20090517 Firefox/3.5b4pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b4pre) Gecko/20090409 Firefox/3.5b4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b4pre) Gecko/20090401 Firefox/3.5b4pre 
Firefox 3.5b4 
Mozilla/5.0 (X11; U; Linux i686; nl-NL; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 GTB5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; fr; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1b4) Gecko/20090423 Firefox/3.5b4 GTB5 
Firefox 3.5.9 
Mozilla/5.0 (X11; U; Linux x86_64; es-CL; rv:1.9.1.9) Gecko/20100402 Ubuntu/9.10 (karmic) Firefox/3.5.9 
Mozilla/5.0 (X11; U; Linux x86_64; cs-CZ; rv:1.9.1.9) Gecko/20100317 SUSE/3.5.9-0.1.1 Firefox/3.5.9 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9.1.9) Gecko/20100401 Ubuntu/9.10 (karmic) Firefox/3.5.9 
Mozilla/5.0 (X11; U; Linux i686; hu-HU; rv:1.9.1.9) Gecko/20100330 Fedora/3.5.9-1.fc12 Firefox/3.5.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.9) Gecko/20100315 Ubuntu/9.10 (karmic) Firefox/3.5.9 
Mozilla/5.0 (Windows; U; Windows NT 6.1; fr; rv:1.9.1.9) Gecko/20100315 Firefox/3.5.9 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.9) Gecko/20100315 Firefox/3.5.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1.9) Gecko/20100315 Firefox/3.5.9 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1.9) Gecko/20100315 Firefox/3.5.9 ( .NET CLR 3.5.30729; .NET4.0E) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.1.9) Gecko/20100315 Firefox/3.5.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; he; rv:1.9.1.9) Gecko/20100315 Firefox/3.5.9 GTB6 (.NET CLR 3.5.30729) 
Firefox 3.5.8 
Mozilla/5.0 (X11; U; Linux x86_64; ru; rv:1.9.1.8) Gecko/20100216 Fedora/3.5.8-1.fc12 Firefox/3.5.8 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.9.1.8) Gecko/20100216 Fedora/3.5.8-1.fc11 Firefox/3.5.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.8) Gecko/20100318 Gentoo Firefox/3.5.8 
Mozilla/5.0 (X11; U; Linux i686; zh-CN; rv:1.9.1.8) Gecko/20100216 Fedora/3.5.8-1.fc12 Firefox/3.5.8 
Mozilla/5.0 (X11; U; Linux i686; ja-JP; rv:1.9.1.8) Gecko/20100216 Fedora/3.5.8-1.fc12 Firefox/3.5.8 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.1.8) Gecko/20100214 Ubuntu/9.10 (karmic) Firefox/3.5.8 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.8) Gecko/20100214 Ubuntu/9.10 (karmic) Firefox/3.5.8 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.8) Gecko/20100202 Firefox/3.5.8 
Mozilla/5.0 (X11; U; FreeBSD i386; ja-JP; rv:1.9.1.8) Gecko/20100305 Firefox/3.5.8 
Mozilla/5.0 (Windows; U; Windows NT 6.1; sl; rv:1.9.1.8) Gecko/20100202 Firefox/3.5.8 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1.8) Gecko/20100202 Firefox/3.5.8 (.NET CLR 3.5.30729) FirePHP/0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.9.1.8) Gecko/20100202 Firefox/3.5.8 GTB6 
Firefox 3.5.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2) Gecko/20100305 Gentoo Firefox/3.5.7 
Mozilla/5.0 (X11; U; Linux x86_64; cs-CZ; rv:1.9.1.7) Gecko/20100106 Ubuntu/9.10 (karmic) Firefox/3.5.7 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.1.7) Gecko/20091222 SUSE/3.5.7-1.1.1 Firefox/3.5.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTB6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 (.NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.30729; .NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; fr; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 (.NET CLR 3.0.04506.648) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 MRA 5.5 (build 02842) Firefox/3.5.7 (.NET CLR 3.5.30729) 
Firefox 3.5.6 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.1.6) Gecko/20091215 Ubuntu/9.10 (karmic) Firefox/3.5.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.6) Gecko/20100117 Gentoo Firefox/3.5.6 
Mozilla/5.0 (X11; U; Linux i686; zh-CN; rv:1.9.1.6) Gecko/20091216 Fedora/3.5.6-1.fc11 Firefox/3.5.6 GTB6 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.1.6) Gecko/20091201 SUSE/3.5.6-1.1.1 Firefox/3.5.6 GTB6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.6) Gecko/20100118 Gentoo Firefox/3.5.6 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.1.6) Gecko/20091215 Ubuntu/9.10 (karmic) Firefox/3.5.6 GTB6 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.6) Gecko/20091215 Ubuntu/9.10 (karmic) Firefox/3.5.6 GTB7.0 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.6) Gecko/20091215 Ubuntu/9.10 (karmic) Firefox/3.5.6 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.6) Gecko/20091201 SUSE/3.5.6-1.1.1 Firefox/3.5.6 
Mozilla/5.0 (X11; U; Linux i686; cs-CZ; rv:1.9.1.6) Gecko/20100107 Fedora/3.5.6-1.fc12 Firefox/3.5.6 
Mozilla/5.0 (X11; U; Linux i686; ca; rv:1.9.1.6) Gecko/20091215 Ubuntu/9.10 (karmic) Firefox/3.5.6 
Mozilla/5.0 (Windows; U; Windows NT 6.1; it; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; id; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1.6) Gecko/20091201 MRA 5.4 (build 02647) Firefox/3.5.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 (.NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 MRA 5.5 (build 02842) Firefox/3.5.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 MRA 5.5 (build 02842) Firefox/3.5.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 GTB6 (.NET CLR 3.5.30729) FBSMTWB 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 (.NET CLR 3.5.30729) FBSMTWB 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 (.NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)

More Firefox 3.5.6 user agents strings –>>

Firefox 3.5.5 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.1.5) Gecko/20091109 Ubuntu/9.10 (karmic) Firefox/3.5.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.8pre) Gecko/20091227 Ubuntu/9.10 (karmic) Firefox/3.5.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.5) Gecko/20091114 Gentoo Firefox/3.5.5 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9.1.5) Gecko/20091102 Firefox/3.5.5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; uk; rv:1.9.1.5) Gecko/20091102 Firefox/3.5.5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.5) Gecko/20091102 MRA 5.5 (build 02842) Firefox/3.5.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.1.5) Gecko/20091102 MRA 5.5 (build 02842) Firefox/3.5.5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; zh-CN; rv:1.9.1.5) Gecko/Firefox/3.5.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.5) Gecko/20091102 MRA 5.5 (build 02842) Firefox/3.5.5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.5) Gecko/20091102 MRA 5.5 (build 02842) Firefox/3.5.5 
Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.8.1) Gecko/20091102 Firefox/3.5.5 
Firefox 3.5.4 
Mozilla/5.0 (X11; U; Linux x86_64; ja; rv:1.9.1.4) Gecko/20091016 SUSE/3.5.4-1.1.2 Firefox/3.5.4 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.4) Gecko/20091016 Firefox/3.5.4 (.NET CLR 3.5.30729) FBSMTWB 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.4) Gecko/20091007 Firefox/3.5.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU; rv:1.9.1.4) Gecko/20091016 Firefox/3.5.4 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.1.4) Gecko/20091007 Firefox/3.5.4 
Firefox 3.5.3pre 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.1.5) Gecko/20091109 Ubuntu/9.10 (karmic) Firefox/3.5.3pre 
Firefox 3.5.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.3) Gecko/20090914 Slackware/13.0_stable Firefox/3.5.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.3) Gecko/20090913 Firefox/3.5.3 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9.1.3) Gecko/20091020 Ubuntu/9.10 (karmic) Firefox/3.5.3 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.1.3) Gecko/20090913 Firefox/3.5.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.3) Gecko/20090919 Firefox/3.5.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.3) Gecko/20090912 Gentoo Firefox/3.5.3 FirePHP/0.3 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 GTB5 
Mozilla/5.0 (X11; U; FreeBSD i386; ru-RU; rv:1.9.1.3) Gecko/20090913 Firefox/3.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-CN; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de-DE; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ko; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fi; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 (.NET CLR 2.0.50727; .NET CLR 3.0.30618; .NET CLR 3.5.21022; .NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; bg; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ko; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ko; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3 (.NET CLR 1.1.4322)

More Firefox 3.5.3 user agents strings –>>

Firefox 3.5.2 
Mozilla/5.0 (X11; U; Linux x86_64; pl; rv:1.9.1.2) Gecko/20090911 Slackware Firefox/3.5.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.2) Gecko/20090803 Slackware Firefox/3.5.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.2) Gecko/20090803 Firefox/3.5.2 Slackware 
Mozilla/5.0 (X11; U; Linux i686; ru-RU; rv:1.9.1.2) Gecko/20090804 Firefox/3.5.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.2) Gecko/20090729 Slackware/13.0 Firefox/3.5.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); fr; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-CN; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB7.1 ( .NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; es-MX; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; uk; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729)

More Firefox 3.5.2 user agents strings –>>

Firefox 3.5.12 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.12) Gecko/2009070611 Firefox/3.5.12 
Firefox 3.5.1 
Mozilla/5.0 (X11; U; Linux x86_64; rv:1.9.1.1) Gecko/20090716 Linux Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1) Gecko/20090716 Linux Mint/7 (Gloria) Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1) Gecko/20090716 Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1) Gecko/20090714 SUSE/3.5.1-1.1 Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux x86; rv:1.9.1.1) Gecko/20090716 Linux Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.2pre) Gecko/20090729 Ubuntu/9.04 (jaunty) Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 GTB5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.1) Gecko/20090722 Gentoo Firefox/3.5.1 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.1) Gecko/20090714 SUSE/3.5.1-1.1 Firefox/3.5.1 
Mozilla/5.0 (X11; U; DragonFly i386; de; rv:1.9.1) Gecko/20090720 Firefox/3.5.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.1) Gecko/20090718 Firefox/3.5.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; tr; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sv-SE; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 GTB5 (.NET CLR 4.0.20506) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 GTB5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1 GTB5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ca; rv:1.9.1.1) Gecko/20090715 Firefox/3.5.1

More Firefox 3.5.1 user agents strings –>>

Firefox 3.5 
Mozilla/5.0 (X11;U; Linux i686; en-GB; rv:1.9.1) Gecko/20090624 Ubuntu/9.04 (jaunty) Firefox/3.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1) Gecko/20090630 Firefox/3.5 GTB6 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (X11; U; Linux i686; it-IT; rv:1.9.0.2) Gecko/2008092313 Ubuntu/9.04 (jaunty) Firefox/3.5 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.1) Gecko/20090624 Firefox/3.5 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.9.1) Gecko/20090624 Ubuntu/9.04 (jaunty) Firefox/3.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1) Gecko/20090701 Ubuntu/9.04 (jaunty) Firefox/3.5 
Mozilla/5.0 (X11; U; Linux i686; en-us; rv:1.9.0.2) Gecko/2008092313 Ubuntu/9.04 (jaunty) Firefox/3.5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1) Gecko/20090624 Ubuntu/8.04 (hardy) Firefox/3.5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1) Gecko/20090624 Firefox/3.5 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); de; rv:1.9.1) Gecko/20090624 Firefox/3.5 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.9.1) Gecko/20090703 Firefox/3.5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; pl; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; es-ES; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1) Gecko/20090612 Firefox/3.5 (.NET CLR 4.0.20506) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1) Gecko/20090612 Firefox/3.5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 4.0.20506) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.1) Gecko/20090624 Firefox/3.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; zh-TW; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 3.5.30729)

More Firefox 3.5 user agents strings –>>

Firefox 3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1b3pre) Gecko/20090105 Firefox/3.1b3pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1b3pre) Gecko/20090204 Firefox/3.1b3pre 
Firefox 3.1b3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b3) Gecko/20090327 Fedora/3.1-0.11.beta3.fc11 Firefox/3.1b3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b3) Gecko/20090312 Firefox/3.1b3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b3) Gecko/20090407 Firefox/3.1b3 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; pl; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 GTB5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1) Gecko/20090624 Firefox/3.1b3;MEGAUPLOAD 1.0 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 GTB5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; es-AR; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b3) Gecko/20090405 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.1b3) Gecko/20090305 Firefox/3.1b3 (.NET CLR 3.5.30729)

More Firefox 3.1b3 user agents strings –>>

Firefox 3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; x64; en-US; rv:1.9.1b2pre) Gecko/20081026 Firefox/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0 x64; en-US; rv:1.9.1b2pre) Gecko/20081026 Firefox/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0 ; x64; en-US; rv:1.9.1b2pre) Gecko/20081026 Firefox/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1 ; x64; en-US; rv:1.9.1b2pre) Gecko/20081026 Firefox/3.1b2pre 
Firefox 3.1b2 
Mozilla/5.0 (X11; U; DragonFly i386; de; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de-AT; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sv-SE; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; it; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de-AT; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; ko; rv:1.9.1b2) Gecko/20081201 Firefox/3.1b2 
Firefox 3.1b1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.1b1) Gecko/20081007 Firefox/3.1b1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b2) Gecko/20081127 Firefox/3.1b1 
Firefox 3.1.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.1.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9.0.2) Gecko/2008092313 Firefox/3.1.6 
Firefox 3.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b3) Gecko/20090327 GNU/Linux/x86_64 Firefox/3.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.6pre) Gecko/2009011606 Firefox/3.1 
Firefox 3.0pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9pre) Gecko/2008040318 Firefox/3.0pre (Swiftfox) 
Firefox 3.0b5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b5pre) Gecko/2008030706 Firefox/3.0b5pre 
Firefox 3.0b5 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.9b5) Gecko/2008032620 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux x86_64; pt-BR; rv:1.9b5) Gecko/2008041515 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9pre) Gecko/2008042312 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9b5) Gecko/2008041816 Fedora/3.0-0.55.beta5.fc9 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9b5) Gecko/2008040514 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; tr-TR; rv:1.9b5) Gecko/2008032600 SUSE/2.9.95-25.1 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9b5) Gecko/2008032600 SUSE/2.9.95-25.1 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9b5) Gecko/2008050509 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9b5) Gecko/2008041514 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b5) Gecko/2008050509 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9b5) Gecko/2008041514 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9b5) Gecko/2008050509 Firefox/3.0b5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9b5) Gecko/2008041514 Firefox/3.0b5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9b5) Gecko/2008032620 Firefox/3.0b5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9b5) Gecko/2008032620 Firefox/3.0b5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; nl; rv:1.9b5) Gecko/2008032620 Firefox/3.0b5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; fr; rv:1.9b5) Gecko/2008032620 Firefox/3.0b5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.9b5) Gecko/2008032620 Firefox/3.0b5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9b5) Gecko/2008032620 Firefox/3.0b5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-GB; rv:1.9b5) Gecko/2008032619 Firefox/3.0b5 
Firefox 3.0b4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b4pre) Gecko/2008021714 Firefox/3.0b4pre (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b4pre) Gecko/2008021712 Firefox/3.0b4pre (Swiftfox) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b4pre) Gecko/2008020708 Firefox/3.0b4pre 
Firefox 3.0b4 
Mozilla/5.0 (X11; U; Windows NT 5.0; en-US; rv:1.9b4) Gecko/2008030318 Firefox/3.0b4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9b4) Gecko/2008040813 Firefox/3.0b4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9b4) Gecko/2008031318 Firefox/3.0b4 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9b4) Gecko/2008030800 SUSE/2.9.94-4.2 Firefox/3.0b4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b4) Gecko/2008031317 Firefox/3.0b4 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl; rv:1.9b4) Gecko/2008030714 Firefox/3.0b4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.9b4) Gecko/2008030714 Firefox/3.0b4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9b4) Gecko/2008030714 Firefox/3.0b4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl; rv:1.9b4) Gecko/2008030714 Firefox/3.0b4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; lt; rv:1.9b4) Gecko/2008030714 Firefox/3.0b4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; it; rv:1.9b4) Gecko/2008030317 Firefox/3.0b4 
Firefox 3.0b3pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9b3pre) Gecko/2008020509 Firefox/3.0b3pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9b3pre) Gecko/2008011321 Firefox/3.0b3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b3pre) Gecko/2008020507 Firefox/3.0b3pre 
Firefox 3.0b3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b3) Gecko/2008020513 Firefox/3.0b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9b3) Gecko/2008020514 Firefox/3.0b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9b3) Gecko/2008020514 Firefox/3.0b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9b3) Gecko/2008020514 Firefox/3.0b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b3) Gecko/2008020514 Firefox/3.0b3 
Firefox 3.0b2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b2) Gecko/2007121016 Firefox/3.0b2 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9b2) Gecko/2007121016 Firefox/3.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.9b2) Gecko/2007121120 Firefox/3.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-AR; rv:1.9b2) Gecko/2007121120 Firefox/3.0b2 
Firefox 3.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b1) Gecko/2007110703 Firefox/3.0b1 
Firefox 3.0B 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b3pre) Gecko/2008010415 Firefox/3.0b 
Firefox 3.0a2 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.9a2) Gecko/20080530 Firefox/3.0a2 
Firefox 3.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20060814 Firefox/3.0a1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.9a1) Gecko/20061204 Firefox/3.0a1 
Mozilla/5.0 (Macintosh; I; PPC Mac OS X Mach-O; en-US; rv:1.9a1) Gecko/20061204 Firefox/3.0a1 
Firefox 3.07 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080716 Firefox/3.07 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.0.8) Gecko/2009032609 Firefox/3.07 
Firefox 3.03 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.03 
Firefox 3.0.9 
Mozilla/6.0 (Windows; U; Windows NT 7.0; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.9 (.NET CLR 3.5.30729) 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.9) Gecko/2009042114 Ubuntu/9.04 (jaunty) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.9.0.9) Gecko/2009042114 Ubuntu/9.04 (jaunty) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.9) Gecko/2009042113 Ubuntu/8.10 (intrepid) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.9) Gecko/2009042114 Ubuntu/9.04 (jaunty) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.9) Gecko/2009042113 Ubuntu/8.10 (intrepid) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.7) Gecko/2009030422 Kubuntu/8.10 (intrepid) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.9) Gecko/2009042113 Ubuntu/9.04 (jaunty) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.9) Gecko/2009042113 Ubuntu/8.04 (hardy) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; fi-FI; rv:1.9.0.9) Gecko/2009042113 Ubuntu/9.04 (jaunty) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.0.9) Gecko/2009042113 Ubuntu/9.04 (jaunty) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.9) Gecko/2009042113 Ubuntu/8.10 (intrepid) Firefox/3.0.9 GTB5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.9) Gecko/2009042113 Linux Mint/6 (Felicia) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.9) Gecko/2009041408 Red Hat/3.0.9-1.el5 Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.9) Gecko/2009040820 Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.9) Gecko/2009042113 Ubuntu/9.04 (jaunty) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.9) Gecko/2009042113 Ubuntu/8.10 (intrepid) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.9) Gecko/2009042113 Ubuntu/8.04 (hardy) Firefox/3.0.9 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.9) Gecko/2009041500 SUSE/3.0.9-2.2 Firefox/3.0.9 
Mozilla/5.0 (Windows; U; Windows NT 6.1; nl; rv:1.9.0.9) Gecko/2009040821 Firefox/3.0.9 FirePHP/0.3

More Firefox 3.0.9 user agents strings –>>

Firefox 3.0.8) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.0.4) Firefox/3.0.8) 
Firefox 3.0.8 
Mozilla/6.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8 (.NET CLR 3.5.30729) 
Mozilla/6.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; zh-TW; rv:1.9.0.8) Gecko/2009032712 Ubuntu/8.04 (hardy) Firefox/3.0.8 GTB5 
Mozilla/5.0 (X11; U; Linux x86_64; nb-NO; rv:1.9.0.8) Gecko/2009032600 SUSE/3.0.8-1.2 Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9.0.8) Gecko/2009033100 Ubuntu/9.04 (jaunty) Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9.0.8) Gecko/2009032712 Ubuntu/8.10 (intrepid) Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; fi-FI; rv:1.9.0.8) Gecko/2009032712 Ubuntu/8.10 (intrepid) Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009040312 Gentoo Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009033100 Ubuntu/9.04 (jaunty) Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032908 Gentoo Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032713 Ubuntu/9.04 (jaunty) Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032712 Ubuntu/8.10 (intrepid) Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032712 Ubuntu/8.04 (hardy) Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032712 Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032600 SUSE/3.0.8-1.1.1 Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032600 SUSE/3.0.8-1.1 Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009030810 Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) Gecko Firefox/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.8) Gecko/2009032712 Ubuntu/8.10 (intrepid) Firefox/3.0.8 FirePHP/0.2.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.8) Gecko/2009032712 Ubuntu/8.10 (intrepid) Firefox/3.0.8

More Firefox 3.0.8 user agents strings –>>

Firefox 3.0.7 
Mozilla/5.0 (X11; U; Windows NT 5.1; en-US; rv:1.9.0.7) Gecko/2009021910 Firefox/3.0.7 
Mozilla/5.0 (X11; U; Mac OSX; it; rv:1.9.0.7) Gecko/2009030422 Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; sv-SE; rv:1.9.0.7) Gecko/2009030423 Ubuntu/8.10 (intrepid) Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.7) Gecko/2009030423 Ubuntu/8.10 (intrepid) Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.9.0.7) Gecko/2009022800 SUSE/3.0.7-1.4 Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009032606 Red Hat/3.0.7-1.el5 Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009032319 Gentoo Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009031802 Gentoo Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009031120 Mandriva/1.9.0.7-0.1mdv2009.0 (2009.0) Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009031120 Mandriva Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009030516 Ubuntu/9.04 (jaunty) Firefox/3.0.7 GTB5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009030516 Ubuntu/9.04 (jaunty) Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009030423 Ubuntu/8.10 (intrepid) Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.7) Gecko/2009030503 Fedora/3.0.7-1.fc9 Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.7) Gecko/2009030620 Gentoo Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux i686; zh-TW; rv:1.9.0.7) Gecko/2009030422 Ubuntu/8.04 (hardy) Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.7) Gecko/2009030503 Fedora/3.0.7-1.fc10 Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux i686; hu-HU; rv:1.9.0.7) Gecko/2009030422 Ubuntu/8.10 (intrepid) Firefox/3.0.7 FirePHP/0.2.4 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.7) Gecko/2009031218 Gentoo Firefox/3.0.7 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.7) Gecko/2009030422 Ubuntu/8.10 (intrepid) Firefox/3.0.7

More Firefox 3.0.7 user agents strings –>>

Firefox 3.0.6pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.6pre) Gecko/2008121605 Firefox/3.0.6pre 
Firefox 3.0.6 
UserAgent: Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.6) Gecko/2009011912 Firefox/3.0.6 
UserAgent: Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-GB; rv:1.9.0.6) Gecko/2009011912 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux; fr; rv:1.9.0.6) Gecko/2009011913 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9.0.6) Gecko/2009020911 Ubuntu/8.10 (intrepid) Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.6) Gecko/2009020519 Ubuntu/9.04 (jaunty) Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.6) Gecko/2009012700 SUSE/3.0.6-1.4 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.16) Gecko/2009121609 Firefox/3.0.6 (Windows NT 5.1) 
Mozilla/5.0 (X11; U; Linux i686; sv-SE; rv:1.9.0.6) Gecko/2009011913 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.9.0.6) Gecko/2009011912 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.6) Gecko/2009020911 Ubuntu/8.10 (intrepid) Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; eu; rv:1.9.0.6) Gecko/2009012700 SUSE/3.0.6-0.1.2 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.6) Gecko/2009020911 Ubuntu/8.10 (intrepid) Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009022714 Ubuntu/9.04 (jaunty) Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009022111 Gentoo Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009020911 Ubuntu/8.04 (hardy) Firefox/3.0.6 FirePHP/0.2.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009020616 Gentoo Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009020518 Ubuntu/9.04 (jaunty) Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009020410 Fedora/3.0.6-1.fc9 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009012700 SUSE/3.0.6-0.1 Firefox/3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.6) Gecko/2009020911 Ubuntu/8.10 (intrepid) Firefox/3.0.6

More Firefox 3.0.6 user agents strings –>>

Firefox 3.0.5 
Mozilla/5.0 (X11; U; x86_64 Linux; en_US; rv:1.9.0.5) Gecko/2008120121 Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.9.0.5) Gecko/2008121623 Ubuntu/8.10 (intrepid) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008122406 Gentoo Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008122120 Gentoo Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008122014 CentOS/3.0.5-1.el4.centos Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008121911 CentOS/3.0.5-1.el5.centos Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008121806 Gentoo Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008121711 Ubuntu/9.04 (jaunty) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.5) Gecko/2008122010 Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; sk; rv:1.9.0.5) Gecko/2008121621 Ubuntu/8.04 (hardy) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9.0.5) Gecko/2008121622 Ubuntu/8.10 (intrepid) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9.0.5) Gecko/2008120121 Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.5) Gecko/2008121300 SUSE/3.0.5-0.1 Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.9.0.5) Gecko/2008121622 Ubuntu/8.10 (intrepid) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.5) Gecko/2008121711 Ubuntu/9.04 (jaunty) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.9.0.5) Gecko/2008123017 Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; fi-FI; rv:1.9.0.5) Gecko/2008121622 Ubuntu/8.10 (intrepid) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.5) Gecko/2009011301 Gentoo Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.5) Gecko/2008121914 Ubuntu/8.04 (hardy) Firefox/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.5) Gecko/2008121718 Gentoo Firefox/3.0.5

More Firefox 3.0.5 user agents strings –>>

Firefox 3.0.4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.4pre) Gecko/2008101311 Firefox/3.0.4pre (Swiftfox) 
Firefox 3.0.4 
Mozilla/5.0 (X11; U; SunOS i86pc; fr; rv:1.9.0.4) Gecko/2008111710 Firefox/3.0.4 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.9.0.4) Gecko/2008111710 Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.9.0.4) Gecko/2008111217 Fedora/3.0.4-1.fc10 Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; es-AR; rv:1.9.0.4) Gecko/2008110510 Red Hat/3.0.4-1.el5_2 Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.6) Gecko/2009020407 Firefox/3.0.4 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.4) Gecko/2008120512 Gentoo Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; cs-CZ; rv:1.9.0.4) Gecko/2008111318 Ubuntu/8.04 (hardy) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.9.0.4) Gecko/2008111317 Ubuntu/8.04 (hardy) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; pt-PT; rv:1.9.0.5) Gecko/2008121622 Ubuntu/8.10 (intrepid) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.9.0.4) Gecko/2008111317 Ubuntu/8.04 (hardy) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.9.0.4) Gecko/2008111217 Fedora/3.0.4-1.fc10 Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.4) Gecko/20081031100 SUSE/3.0.4-4.6 Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9.0.4) Gecko/2008111317 Ubuntu/8.04 (hardy) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9.0.11) Gecko/2009060309 Ubuntu/8.04 (hardy) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.4) Gecko/2008111217 Red Hat Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.0.4) Gecko/2008111317 Ubuntu/8.04 (hardy) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.0.4) Gecko/2008111317 Linux Mint/5 (Elyssa) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko/2009032018 Firefox/3.0.4 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.5) Gecko/2008121622 Linux Mint/6 (Felicia) Firefox/3.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.4) Gecko/2008111318 Ubuntu/8.10 (intrepid) Firefox/3.0.4

More Firefox 3.0.4 user agents strings –>>

Firefox 3.0.3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3pre) Gecko/2008090713 Firefox/3.0.3pre (Swiftfox) 
Firefox 3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9.0.3) Gecko/2008092813 Gentoo Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; es-AR; rv:1.9.0.3) Gecko/2008092515 Ubuntu/8.10 (intrepid) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009030719 Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 (Linux Mint) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.3) Gecko/2008090713 Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x86; es-ES; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux x64_64; es-AR; rv:1.9.0.3) Gecko/2008092515 Ubuntu/8.10 (intrepid) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux ia64; en-US; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; zh-TW; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; sv-SE; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.3) Gecko/2008092700 SUSE/3.0.3-2.2 Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; ko-KR; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.3) Gecko/2008092510 Ubuntu/8.04 (hardy) Firefox/3.0.3

More Firefox 3.0.3 user agents strings –>>

Firefox 3.0.2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.0.2pre) Gecko/2008082305 Firefox/3.0.2pre 
Firefox 3.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.9.0.2) Gecko/2008092213 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.2) Gecko/2008092213 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.2) Gecko/2008092418 CentOS/3.0.2-3.el5.centos Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.2) Gecko/2008092318 Fedora/3.0.2-1.fc9 Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.2) Gecko/2008092213 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.2) Gecko/2008092213 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.2) Gecko/2008092318 Fedora/3.0.2-1.fc9 Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008110715 ASPLinux/3.0.2-3.0.120asp Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092809 Gentoo Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092418 CentOS/3.0.2-3.el5.centos Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092318 Fedora/3.0.2-1.fc9 Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092313 Ubuntu/1.4.0 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008092000 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008091816 Red Hat/3.0.2-3.el5 Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.0.2 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.2) Gecko/2008092313 Ubuntu/8.04 (hardy) Firefox/3.0.2

More Firefox 3.0.2 user agents strings –>>

Firefox 3.0.1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1pre) Gecko/2008062222 Firefox/3.0.1pre (Swiftfox) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9) Gecko/2008052906 Firefox/3.0.1pre 
Firefox 3.0.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20090213 Firefox/3.0.1b3pre 
Firefox 3.0.18 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.18) Gecko/2010021501 Ubuntu/9.04 (jaunty) Firefox/3.0.18 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.18) Gecko/2010021501 Ubuntu/9.04 (jaunty) Firefox/3.0.18 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.18) Gecko/2010021501 Firefox/3.0.18 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.18) Gecko/2010020400 SUSE/3.0.18-0.1.1 Firefox/3.0.18 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sv-SE; rv:1.9.0.18) Gecko/2010020220 Firefox/3.0.18 (.NET CLR 3.5.30729) 
Firefox 3.0.17 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.17) Gecko/2010011010 Mandriva/1.9.0.17-0.1mdv2009.1 (2009.1) Firefox/3.0.17 GTB6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.17) Gecko/2010010604 Ubuntu/9.04 (jaunty) Firefox/3.0.17 FirePHP/0.4 
Firefox 3.0.16 
Mozilla/5.0 (X11; U; Linux i686; cs-CZ; rv:1.9.0.16) Gecko/2009121601 Ubuntu/9.04 (jaunty) Firefox/3.0.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.9.0.16) Gecko/2009120208 Firefox/3.0.16 FBSMTWB 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.9.0.16) Gecko/2009120208 Firefox/3.0.16 FBSMTWB 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.16) Gecko/2009120208 Firefox/3.0.16 FBSMTWB 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-LI; rv:1.9.0.16) Gecko/2009120208 Firefox/3.0.16 (.NET CLR 3.5.30729) 
Firefox 3.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; ru; rv:1.9.0.14) Gecko/2009090217 Ubuntu/9.04 (jaunty) Firefox/3.0.14 (.NET CLR 3.5.30729) 
Mozilla/5.0 (X11; U; Linux x86_64; pt-BR; rv:1.9.0.14) Gecko/2009090217 Ubuntu/9.04 (jaunty) Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9.0.14) Gecko/2009090216 Ubuntu/8.04 (hardy) Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.14) Gecko/2009090216 Ubuntu/8.04 (hardy) Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; fi-FI; rv:1.9.0.14) Gecko/2009090217 Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.14) Gecko/2009090217 Ubuntu/9.04 (jaunty) Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.14) Gecko/2009090216 Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.14) Gecko/20090916 Ubuntu/9.04 (jaunty) Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.14) Gecko/2009090905 Fedora/3.0.14-1.fc10 Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.14) Gecko/2009090216 Ubuntu/9.04 (jaunty) Firefox/3.0.14 GTB5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.14) Gecko/2009090216 Ubuntu/9.04 (jaunty) Firefox/3.0.14 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.14) Gecko/2009082505 Red Hat/3.0.14-1.el5_4 Firefox/3.0.14 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.0.14) Gecko/2009082707 Firefox/3.0.14 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.9.0.14) Gecko/2009082707 Firefox/3.0.14 GTB6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.9.0.14) Gecko/2009082707 Firefox/3.0.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.9.0.14) Gecko/2009082707 Firefox/3.0.14 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ; rv:1.9.0.14) Gecko/2009082707 Firefox/3.0.14 
Firefox 3.0.13 
Mozilla/5.0 (X11; U; Linux x86_64; zh-TW; rv:1.9.0.13) Gecko/2009080315 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.14) Gecko/2009090217 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.13) Gecko/2009080315 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux i686; zh-TW; rv:1.9.0.13) Gecko/2009080315 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.13) Gecko/2009080315 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux i686; fr-be; rv:1.9.0.8) Gecko/2009073022 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux i686; fi-FI; rv:1.9.0.13) Gecko/2009080315 Linux Mint/6 (Felicia) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.13) Gecko/2009080315 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.13) Gecko/2009080316 Ubuntu/8.04 (hardy) Firefox/3.0.13 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.13) Gecko/2009080315 Ubuntu/9.04 (jaunty) Firefox/3.0.13 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 (.NET CLR 4.0.20506) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; cs; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-be; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 (.NET CLR 3.5.30729) FBSMTWB 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.0.13) Gecko/2009073022 Firefox/3.0.13 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; de; rv:1.9.0.13) Gecko/2009073021 Firefox/3.0.13

More Firefox 3.0.13 user agents strings –>>

Firefox 3.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.9.0.12) Gecko/2009072711 CentOS/3.0.12-1.el5.centos Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.9.0.12) Gecko/2009070811 Ubuntu/9.04 (jaunty) Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.12) Gecko/2009070818 Ubuntu/8.10 (intrepid) Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.12) Gecko/2009070811 Ubuntu/9.04 (jaunty) Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.12) Gecko/2009070811 Ubuntu/9.04 (jaunty) Firefox/3.0.12 FirePHP/0.3 
Mozilla/5.0 (X11; U; Linux ppc; en-GB; rv:1.9.0.12) Gecko/2009070818 Ubuntu/8.10 (intrepid) Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.12) Gecko/2009070818 Ubuntu/8.10 (intrepid) Firefox/3.0.12 FirePHP/0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.12) Gecko/2009070818 Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.12) Gecko/2009070812 Linux Mint/5 (Elyssa) Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.12) Gecko/2009070610 Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.12) Gecko/2009070812 Ubuntu/8.04 (hardy) Firefox/3.0.12 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.12) Gecko/2009070811 Ubuntu/9.04 (jaunty) Firefox/3.0.12 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 (.NET CLR 3.5.30729) FirePHP/0.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sr; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; nl; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 GTB5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.0.12) Gecko/2009070611 Firefox/3.0.12 (.NET CLR 3.5.30729)

More Firefox 3.0.12 user agents strings –>>

Firefox 3.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.11) Gecko/2009060309 Ubuntu/9.04 (jaunty) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.11) Gecko/2009070612 Gentoo Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.11) Gecko/2009061417 Gentoo Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.11) Gecko/2009061118 Fedora/3.0.11-1.fc9 Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.11) Gecko/2009060309 Linux Mint/7 (Gloria) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.11) Gecko/2009060308 Ubuntu/9.04 (jaunty) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.11) Gecko/2009070611 Gentoo Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9.0.11) Gecko/2009060308 Ubuntu/9.04 (jaunty) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.11) Gecko/2009061118 Fedora/3.0.11-1.fc10 Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; it-IT; rv:1.9.0.11) Gecko/2009060308 Linux Mint/7 (Gloria) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; fi-FI; rv:1.9.0.11) Gecko/2009060308 Ubuntu/9.04 (jaunty) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.11) Gecko/2009061118 Fedora/3.0.11-1.fc9 Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.11) Gecko/2009060310 Ubuntu/8.10 (intrepid) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.11) Gecko/2009060309 Linux Mint/5 (Elyssa) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.11) Gecko/2009060310 Linux Mint/6 (Felicia) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.11) Gecko/2009060308 Linux Mint/7 (Gloria) Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.11) Gecko/2009060309 Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.11) Gecko/2009060308 Ubuntu/9.04 (jaunty) Firefox/3.0.11 GTB5 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.11) Gecko/2009060214 Firefox/3.0.11 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.11) Gecko/2009062218 Gentoo Firefox/3.0.11

More Firefox 3.0.11 user agents strings –>>

Firefox 3.0.10 
Mozilla/5.0 (X11; U; Slackware Linux i686; en-US; rv:1.9.0.10) Gecko/2009042315 Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.10) Gecko/2009042523 Ubuntu/9.04 (jaunty) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux x86_64; da-DK; rv:1.9.0.10) Gecko/2009042523 Ubuntu/9.04 (jaunty) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; tr-TR; rv:1.9.0.10) Gecko/2009042523 Ubuntu/9.04 (jaunty) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.10) Gecko/2009042513 Ubuntu/8.04 (hardy) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; hu-HU; rv:1.9.0.10) Gecko/2009042718 CentOS/3.0.10-1.el5.centos Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.10) Gecko/2009042708 Fedora/3.0.10-1.fc10 Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.10) Gecko/2009042513 Ubuntu/8.04 (hardy) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.10) Gecko/2009042523 Ubuntu/9.04 (jaunty) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.10) Gecko/2009042513 Linux Mint/5 (Elyssa) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009020410 Fedora/3.0.6-1.fc10 Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko/2009042812 Gentoo Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko/2009042708 Fedora/3.0.10-1.fc10 Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko/2009042523 Ubuntu/8.10 (intrepid) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko/2009042523 Linux Mint/7 (Gloria) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko/2009042523 Linux Mint/6 (Felicia) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko/2009042513 Linux Mint/5 (Elyssa) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.10) Gecko/2009042523 Ubuntu/8.10 (intrepid) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.10) Gecko/2009042513 Ubuntu/8.04 (hardy) Firefox/3.0.10 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.10) Gecko/2009042523 Ubuntu/9.04 (jaunty) Firefox/3.0.10

More Firefox 3.0.10 user agents strings –>>

Firefox 3.0.1 
Mozilla/5.0 (X11; U; OpenBSD amd64; en-US; rv:1.9.0.1) Gecko/2008081402 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; rv:1.9.0.1) Gecko/2008072820 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.9.0.1) Gecko/2008071222 Ubuntu/hardy Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.9.0.1) Gecko/2008071222 Ubuntu (hardy) Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.9.0.1) Gecko/2008071222 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; ko-KR; rv:1.9.0.1) Gecko/2008071717 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9.0.1) Gecko/2008071717 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.1) Gecko/2008071222 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.1) Gecko/2008070400 SUSE/3.0.1-1.1 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.9.0.1) Gecko/2008072820 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.1) Gecko/2008110312 Gentoo Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.1) Gecko/2008072820 Kubuntu/8.04 (hardy) Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.1) Gecko/2008072820 Firefox/3.0.1 FirePHP/0.1.1.2 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.1) Gecko/2008070400 SUSE/3.0.1-0.1 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64) Gecko/2008072820 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux i686; rv:1.9) Gecko/20080810020329 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9.0.1) Gecko/2008071719 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.1) Gecko/2008071719 Firefox/3.0.1 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.1) Gecko/2008071222 Firefox/3.0.1

More Firefox 3.0.1 user agents strings –>>

Firefox 3.0.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.0 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.0 
Firefox 3.0 
Mozilla/6.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:2.0.0.0) Gecko/20061028 Firefox/3.0 
Mozilla/5.0 (X11; U; SunOS sun4u; it-IT; ) Gecko/20080000 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.9) Gecko/2008060309 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.9) Gecko/2008061017 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9) Gecko/2008061017 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; es-AR; rv:1.9) Gecko/2008061017 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; es-AR; rv:1.9) Gecko/2008061015 Ubuntu/8.04 (hardy) Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0) Gecko/2008061600 SUSE/3.0-1.2 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9) Gecko/2008062908 Firefox/3.0 (Debian-3.0~rc2-2) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9) Gecko/2008062315 (Gentoo) Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9) Gecko/2008061317 (Gentoo) Firefox/3.0 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9) Gecko/2008061017 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; tr-TR; rv:1.9.0) Gecko/2008061600 SUSE/3.0-1.2 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; sk; rv:1.9.1) Gecko/20090630 Fedora/3.5-1.fc11 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; sk; rv:1.9) Gecko/2008061015 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; rv:1.9) Gecko/2008080808 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9) Gecko/2008061812 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.5) Gecko/2008121622 Slackware/2.6.27-PiP Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9) Gecko/2008061015 Firefox/3.0 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9) Gecko/2008061015 Firefox/3.0

More Firefox 3.0 user agents strings –>>

Firefox 2.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.0.15) Gecko/2009101601 Firefox 2.1 (.NET CLR 3.5.30729) 
Firefox 2.0b3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1b1) Gecko/20061110 Firefox/2.0b3 
Firefox 2.0b2 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1) Gecko/20060918 Firefox/2.0b2 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1) Gecko/20060916 Firefox/2.0b2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080208 Firefox/2.0b2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1b2) Gecko/20060821 Firefox/2.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.8.1.1) Gecko/20061204 Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1) Gecko/20060918 Firefox/2.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1b2) Gecko/20060821 Firefox/2.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1b2) Gecko/20060821 Firefox/2.0b2 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.8.1b2) Gecko/20060901 Firefox/2.0b2 
Firefox 2.0b1 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Mozilla/5.0 (X11; U; Linux i686; en_US; rv:1.8.1b1) Gecko/20060813 Firefox/2.0b1 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1b1) Gecko/20060707 Firefox/2.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ca; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1b1) Gecko/20060707 Firefox/2.0b1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1b1) Gecko/20060710 Firefox/2.0b1 
Firefox 2.0b 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1) Gecko/20061001 Firefox/2.0b (Swiftfox) 
Firefox 2.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8) Gecko/20060321 Firefox/2.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8) Gecko/20060319 Firefox/2.0a1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8) Gecko/20060322 Firefox/2.0a1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8) Gecko/20060320 Firefox/2.0a1 
Firefox 2.0.9.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.9.9 
Firefox 2.0.4 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.4) Gecko/20070515 Firefox/2.0.4 
Firefox 2.0.0.9 
Mozilla/5.0 (X11; U; SunOS sun4v; es-ES; rv:1.8.1.9) Gecko/20071127 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.9) Gecko/20071102 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; nl-NL; rv:1.8.1.9) Gecko/20071105 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071105 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071105 Fedora/2.0.0.9-1.fc7 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071103 Firefox/2.0.0.9 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071103 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071025 FreeBSD/i386 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.9) Gecko/20071105 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-GB; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; U; Windows NT 6.0; tr; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; U; Windows NT 6.0; it; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.2; da; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; tr; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sl; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9

More Firefox 2.0.0.9 user agents strings –>>

Firefox 2.0.0.8pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17pre) Gecko/20080715 Firefox/2.0.0.8pre 
Firefox 2.0.0.8 
Mozilla/5.0 (X11; U; x86_64 Linux; en_US; rv:1.8.16) Gecko/20071015 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Windows NT i686; fr; rv:1.9.0.1) Gecko/2008070206 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; ru; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.8) Gecko/20071015 SUSE/2.0.0.8-1.1 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.12) Gecko/20080129 Firefox/2.0.0.8 (Debian-2.0.0.12-1) 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; hu; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.1) Gecko/2008070206 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.8) Gecko/20071030 Fedora/2.0.0.8-2.fc8 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071201 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071022 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071019 Fedora/2.0.0.8-1.fc7 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071008 FreeBSD/i386 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071004 Firefox/2.0.0.8 (Debian-2.0.0.8-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20061201 Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.8) Gecko/20071008 Ubuntu/7.10 (gutsy) Firefox/2.0.0.8

More Firefox 2.0.0.8 user agents strings –>>

Firefox 2.0.0.7 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.1.7) Gecko/20070930 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; pl; rv:1.8.1.7) Gecko/20071009 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.7) Gecko/20070918 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.6) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.7) Gecko/20070923 Firefox/2.0.0.7 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.7) Gecko/20070921 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.6) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux i386; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux Gentoo; pl-PL; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Linux amd64; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (X11; U; Gentoo Linux x86_64; pl-PL; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; it-IT; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en_US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.2; nl; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7

More Firefox 2.0.0.7 user agents strings –>>

Firefox 2.0.0.6 
Mozilla/5.0 (X11; U; SunOS sun4u; pl-PL; rv:1.8.1.6) Gecko/20071217 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; SunOS sun4u; de-DE; rv:1.8.1.6) Gecko/20070805 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; SunOS i86pc; en-ZW; rv:1.8.1.6) Gecko/20071125 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; OpenBSD sparc64; en-US; rv:1.8.1.6) Gecko/20070816 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; OpenBSD sparc64; en-AU; rv:1.8.1.6) Gecko/20071225 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.1.6) Gecko/20070819 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.1.4) Gecko/20070704 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; OpenBSD i386; de-DE; rv:1.8.1.6) Gecko/20080429 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; OpenBSD amd64; en-US; rv:1.8.1.6) Gecko/20070817 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; NetBSD sparc64; fr-FR; rv:1.8.1.6) Gecko/20070822 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; NetBSD alpha; en-US; rv:1.8.1.6) Gecko/20080115 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.6) Gecko/20061201 Firefox/2.0.0.6 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux x86_64; de-DE; rv:1.8.1.6) Gecko/20070802 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; Linux x86; en-US; rv:1.8.1.6) Gecko/20061201 Firefox/2.0.0.6 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.8.1.6) Gecko/20061201 Firefox/2.0.0.6 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.6) Gecko/20070803 Firefox/2.0.0.6 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.6) Gecko/20070831 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.6) Gecko/20070807 Firefox/2.0.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.6) Gecko/20070804 Firefox/2.0.0.6

More Firefox 2.0.0.6 user agents strings –>>

Firefox 2.0.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.5) Gecko/20061201 Firefox/2.0.0.5 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; Ubuntu 7.04; de-CH; rv:1.8.1.5) Gecko/20070309 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.5) Gecko/20070718 Fedora/2.0.0.5-1.fc7 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3) Gecko/2008100320 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.5) Gecko/20070728 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.5) Gecko/20070725 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.5) Gecko/20070719 Firefox/2.0.0.5 (Debian-2.0.0.5-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.5) Gecko/20070718 Fedora/2.0.0.5-1.fc7 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.5) Gecko/20061201 Firefox/2.0.0.5 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.5) Gecko/20060911 SUSE/2.0.0.5-1.2 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.5) Gecko/20070718 Fedora/2.0.0.5-1.fc7 Firefox/2.0.0.5 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-GB; rv:1.8.1.5) Gecko/20070718 Fedora/2.0.0.5-1.fc7 Firefox/2.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; zh-TW; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja-JP; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.5

More Firefox 2.0.0.5 user agents strings –>>

Firefox 2.0.0.4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4pre) Gecko/20070509 Firefox/2.0.0.4pre (Swiftfox) 
Firefox 2.0.0.4 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.4) Gecko/20070622 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.4) Gecko/20070531 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.8.1.4) Gecko/20070622 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.1.4) Gecko/20070704 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; pl; rv:1.8.1.4) Gecko/20070611 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.4) Gecko/20070627 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.4) Gecko/20070604 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.4) Gecko/20070529 SUSE/2.0.0.4-6.1 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.4) Gecko/20070515 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.4) Gecko/20061201 Firefox/2.0.0.4 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.4) Gecko/20061201 Firefox/2.0.0.4 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.4) Gecko/20070621 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.4) Gecko/20060601 Firefox/2.0.0.4 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.4) Gecko/20070515 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.4) Gecko/20061201 Firefox/2.0.0.4 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070602 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070531 Firefox/2.0.0.4 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070531 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070530 Fedora/2.0.0.4-1.fc7 Firefox/2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070515 Firefox/2.0.0.4 (Kubuntu)

More Firefox 2.0.0.4 user agents strings –>>

Firefox 2.0.0.3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3pre) Gecko/20070307 Firefox/2.0.0.3pre (Swiftfox) 
Firefox 2.0.0.3C 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.5) Gecko/20070713 Firefox/2.0.0.3C 
Firefox 2.0.0.3 
Mozilla/5.0 (X11; U; SunOS sun4v; en-US; rv:1.8.1.3) Gecko/20070321 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.3) Gecko/20070321 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.8.1.3) Gecko/20070423 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.1.3) Gecko/20070505 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.8.1.3) Gecko/20070322 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008122010 Firefox/2.0.0.3 (Debian-3.0.5-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.3) Gecko/20070415 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.3) Gecko/20070324 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.3) Gecko/20070322 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.3) Gecko/20061201 Firefox/2.0.0.3 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.1.3) Gecko/20070310 Firefox/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; zh-TW; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.3) Gecko/20061201 Firefox/2.0.0.3 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.1.3) Gecko/20060601 Firefox/2.0.0.3 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; nb-NO; rv:1.8.1.3) Gecko/20070310 Firefox/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.3) Gecko/20070410 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.3) Gecko/20070406 Firefox/2.0.0.3 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.3) Gecko/20070310 Firefox/2.0.0.3 (Debian-2.0.0.3-2) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3

More Firefox 2.0.0.3 user agents strings –>>

Firefox 2.0.0.2pre 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.8.1.2pre) Gecko/20061023 SUSE/2.0.0.1-0.1 Firefox/2.0.0.2pre 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.2pre) Gecko/20061023 SUSE/2.0.0.1-0.1 Firefox/2.0.0.2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2pre) Gecko/20070118 Firefox/2.0.0.2pre 
Firefox 2.0.0.22pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.22pre) Gecko/20090327 Ubuntu/8.04 (hardy) Firefox/2.0.0.22pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.22pre) Gecko/20090327 Ubuntu/7.10 (gutsy) Firefox/2.0.0.22pre 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.22pre) Gecko/20090327 Ubuntu/7.10 (gutsy) Firefox/2.0.0.22pre 
Firefox 2.0.0.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.21 
Firefox 2.0.0.20 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.20) Gecko/20090108 Firefox/2.0.0.20 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.20) Gecko/20081217 Firefox(2.0.0.20) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.20) Gecko/20090206 Firefox/2.0.0.20 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.1.20) Gecko/20090413 Firefox/2.0.0.20 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.1.20) Gecko/20090225 Firefox/2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 GTB5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 6.0; zh-TW; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ko; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; cs; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-GB; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20

More Firefox 2.0.0.20 user agents strings –>>

Firefox 2.0.0.2 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.2) Gecko/20070226 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux; en-US; rv:1.8.1.2) Gecko/20070219 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; it; rv:1.8.1.2) Gecko/20060601 Firefox/2.0.0.2 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; sv-SE; rv:1.8.1.2) Gecko/20061023 SUSE/2.0.0.2-1.1 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1.2) Gecko/20070220 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.2) Gecko/20060601 Firefox/2.0.0.2 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; hu; rv:1.8.1.2) Gecko/20070220 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.2) Gecko/20060601 Firefox/2.0.0.2 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.2) Gecko/20070225 Firefox/2.0.0.2 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.2) Gecko/20070220 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.2) Gecko/20060601 Firefox/2.0.0.2 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.2) Gecko/20070220 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070317 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070314 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070226 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070225 Firefox/2.0.0.2 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070221 SUSE/2.0.0.2-6.1 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070220 Firefox/2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20061201 Firefox/2.0.0.2 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20061201 Firefox/2.0.0.2

More Firefox 2.0.0.2 user agents strings –>>

Firefox 2.0.0.19 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.19) Gecko/20081213 SUSE/2.0.0.19-0.1 Firefox/2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.19) Gecko/20081216 Ubuntu/7.10 (gutsy) Firefox/2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081230 Firefox/2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081216 Fedora/2.0.0.19-1.fc8 Firefox/2.0.0.19 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081213 SUSE/2.0.0.19-0.1 Firefox/2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.19) Gecko/20081213 SUSE/2.0.0.19-0.1 Firefox/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 6.0; zh-CN; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.19) Gecko/20081201 Firefox/2.0.0.19 
Firefox 2.0.0.18 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.18) Gecko/20081113 Ubuntu/8.04 (hardy) Firefox/2.0.0.18 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.18) Gecko/20081112 Fedora/2.0.0.18-1.fc8 Firefox/2.0.0.18 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.18) Gecko/20081113 Ubuntu/8.04 (hardy) Firefox/2.0.0.18 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.18) Gecko/20081112 Fedora/2.0.0.18-1.fc8 Firefox/2.0.0.18 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.18) Gecko/20080921 SUSE/2.0.0.18-0.1 Firefox/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.18) Gecko/20081029 Firefox/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.1.18) Gecko/20081029 Firefox/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.18) Gecko/20081029 Firefox/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.18) Gecko/20081029 Firefox/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs; rv:1.8.1.18) Gecko/20081029 Firefox/2.0.0.18 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.0.4) Gecko/20081029 Firefox/2.0.0.18 
Firefox 2.0.0.17 
Mozilla/5.0 (X11; U; Linux sparc64; en-US; rv:1.8.1.17) Gecko/20081108 Firefox/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/20080924 Ubuntu/8.04 (hardy) Firefox/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/20080922 Ubuntu/7.10 (gutsy) Firefox/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/20080921 SUSE/2.0.0.17-1.2 Firefox/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/20080703 Mandriva/2.0.0.17-1.1mdv2008.1 (2008.1) Firefox/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.14) Gecko/20080404 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv-SE; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de; rv:1.8.1.17) Gecko/20080829 Firefox/2.0.0.17 
Mozilla/5.0 (U; Windows NT 5.1; en-GB; rv:1.8.1.17) Gecko/20080808 Firefox/2.0.0.17 
Firefox 2.0.0.16 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.1.16) Gecko/20080812 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.8.1.16) Gecko/20080715 Fedora/2.0.0.16-1.fc8 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.16) Gecko/20080719 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.16) Gecko/20080718 Ubuntu/8.04 (hardy) Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080722 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080718 Ubuntu/8.04 (hardy) Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080715 Ubuntu/7.10 (gutsy) Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080715 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080715 Fedora/2.0.0.16-1.fc8 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.16) Gecko/20080715 Ubuntu/7.10 (gutsy) Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.16) Gecko/20080718 Ubuntu/8.04 (hardy) Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); fr; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.16) Gecko/20080716 Firefox/2.0.0.16 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; es-ES; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16

More Firefox 2.0.0.16 user agents strings –>>

Firefox 2.0.0.15 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.15) Gecko/20080702 Ubuntu/8.04 (hardy) Firefox/2.0.0.15 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.15) Gecko/20080702 Ubuntu/8.04 (hardy) Firefox/2.0.0.15 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.15) Gecko/20061201 Firefox/2.0.0.15 (Ubuntu-feisty) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sv-SE; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1.2) Gecko/20090729 Firefox/2.0.0.15 
Mozilla/5.0 (Windows; U; Windows NT 5.2; sk; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; de; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15 
Firefox 2.0.0.14 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.14) Gecko/20080418 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; hu; rv:1.8.1.14) Gecko/20080416 Fedora/2.0.0.14-1.fc7 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.6) Gecko/2010012717 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux ppc64; en-US; rv:1.8.1.14) Gecko/20080418 Ubuntu/7.10 (gutsy) Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.14) Gecko/20080420 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.14) Gecko/20080416 Fedora/2.0.0.14-1.fc7 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.14) Gecko/20080419 Ubuntu/8.04 (hardy) Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.14) Gecko/20080404 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080525 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080508 Ubuntu/8.04 (hardy) Firefox/2.0.0.14 (Linux Mint) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080428 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080423 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080417 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080416 Fedora/2.0.0.14-1.fc8 Firefox/2.0.0.14 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080410 SUSE/2.0.0.14-0.4 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080404 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20061201 Firefox/2.0.0.14 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.14) Gecko/20080418 Ubuntu/7.10 (gutsy) Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.14) Gecko/20080410 SUSE/2.0.0.14-0.1 Firefox/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.14) Gecko/20080417 Firefox/2.0.0.14

More Firefox 2.0.0.14 user agents strings –>>

Firefox 2.0.0.13 
User-Agent:Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.8.1.13) Gecko/20080325 Ubuntu/7.10 (gutsy) Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.13) Gecko/20080208 Mandriva/2.0.0.13-1mdv2008.1 (2008.1) Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080330 Ubuntu/7.10 (gutsy) Firefox/2.0.0.13 (Linux Mint) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080325 Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080316 SUSE/2.0.0.13-1.1 Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080316 SUSE/2.0.0.13-0.1 Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20061201 Firefox/2.0.0.13 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.13) Gecko/20080325 Ubuntu/7.10 (gutsy) Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; bg; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686 Gentoo; en-US; rv:1.8.1.13) Gecko/20080413 Firefox/2.0.0.13 (Gentoo Linux) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; es-ES; rv:1.8.1.14) Gecko/20080404 Firefox/2.0.0.13 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-GB; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.14) Gecko/20080404 Firefox/2.0.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-AR; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/2.0.0.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.13 
Mozilla/5.0 (compatible; N; Windows NT 5.1; en;) Gecko/20080325 Firefox/2.0.0.13 
Firefox 2.0.0.12pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.12pre) Gecko/20080122 Firefox/2.0.0.12pre 
Firefox 2.0.0.12; 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.8.1.12) Gecko/20080201 Firefox/2.0.0.12; MEGAUPLOAD 2.0 
Firefox 2.0.0.12 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.12) Gecko/20080210 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.1) Gecko/2008072610 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.12) Gecko/20080214 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.12) Gecko/20080203 SUSE/2.0.0.12-0.1 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.8.1.12) Gecko/20080207 Ubuntu/7.10 (gutsy) Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.8.1.12) Gecko/20080203 SUSE/2.0.0.12-0.1 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.8.1.12) Gecko/20080208 Fedora/2.0.0.12-1.fc8 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.8.1.12) Gecko/20080203 SUSE/2.0.0.12-6.1 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86; sv-SE; rv:1.8.1.12) Gecko/20080207 Ubuntu/8.04 (hardy) Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.12) Gecko/20080208 Fedora/2.0.0.12-1.fc8 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.8.1.6) Gecko/20080208 Ubuntu/7.10 (gutsy) Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.12) Gecko/20080213 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.12) Gecko/20080207 Ubuntu/7.10 (gutsy) Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080419 Ubuntu/8.04 (hardy) Firefox/2.0.0.12 MEGAUPLOAD 1.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080208 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080208 Fedora/2.0.0.12-1.fc8 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080201 Firefox/2.0.0.12 Mnenhy/0.7.5.666 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080129 Firefox/2.0.0.12 (Debian-2.0.0.12-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.12) Gecko/20080203 SUSE/2.0.0.12-2.1 Firefox/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.12) Gecko/20080207 Ubuntu/7.10 (gutsy) Firefox/2.0.0.12

More Firefox 2.0.0.12 user agents strings –>>

Firefox 2.0.0.11 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.11) Gecko/20080118 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.1.4) Gecko/20071127 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; zh-TW; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.11) Gecko/20071201 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.11) Gecko/20070914 Mandriva/2.0.0.11-1.1mdv2008.0 (2008.0) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; ru-RU; rv:1.8.1.11) Gecko/20071201 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; pt-PT; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.8.1.11) Gecko/20071128 Firefox/2.0.0.11 (Debian-2.0.0.11-1) 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; ja-JP; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.8) Gecko/20071022 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.6) Gecko/20071008 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.8.1.11) Gecko/20071216 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20080201 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071217 Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 Ubuntu/7.10 (gutsy) Firefox/2.0.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071204 Firefox/2.0.0.11

More Firefox 2.0.0.11 user agents strings –>>

Firefox 2.0.0.10 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.10) Gecko/20061201 Firefox/2.0.0.10 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.10) Gecko/20071213 Fedora/2.0.0.10-3.fc8 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.10) Gecko/20071128 Fedora/2.0.0.10-2.fc7 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.10) Gecko/20071126 Ubuntu/7.10 (gutsy) Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/20080827 Firefox/2.0.0.10 (Debian-2.0.0.17-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20071213 Fedora/2.0.0.10-3.fc8 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20071203 Ubuntu/7.10 (gutsy) Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20071128 Fedora/2.0.0.10-2.fc7 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20071126 Ubuntu/7.10 (gutsy) Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20071115 Firefox/2.0.0.10 (Debian-2.0.0.10-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20071115 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20071015 SUSE/2.0.0.10-0.2 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20061201 Firefox/2.0.0.10 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.10) Gecko/20060601 Firefox/2.0.0.10 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.10) Gecko/20071126 Ubuntu/7.10 (gutsy) Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.10) Gecko/20071126 Ubuntu/7.10 (gutsy) Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.10) Gecko/20071115 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.10) Gecko/20071015 SUSE/2.0.0.10-0.2 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.10) Gecko/20071015 SUSE/2.0.0.10-0.1 Firefox/2.0.0.10 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.1.4) Gecko/20070515 Firefox/2.0.0.10

More Firefox 2.0.0.10 user agents strings –>>

Firefox 2.0.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux x86_64; fi-FI; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.8.1.1) Gecko/20061208 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.1.1) Gecko/20070311 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; hu; rv:1.8.1.1) Gecko/20061208 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/20061201 Firefox/2.0.0.1 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20070224 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20070110 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20061220 Firefox/2.0.0.1 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20061208 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20061205 Firefox/2.0.0.1 (Debian-2.0.0.1+dfsg-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20061205 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.2pre) Gecko/20061023 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.1) Gecko/20061208 Firefox/2.0.0.1 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.1) Gecko/20061220 Firefox/2.0.0.1 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.1) Gecko/20061205 Firefox/2.0.0.1 (Debian-2.0.0.1+dfsg-2)

More Firefox 2.0.0.1 user agents strings –>>

Firefox 2.0.0.0 
Mozilla/5.0 (X11; U; SunOS sun4u; de-DE; rv:1.9.1b4) Gecko/20090428 Firefox/2.0.0.0 
Firefox 2.0.0 
Mozilla/5.0 (X11; Linux x86_64; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Mozilla/5.0 (X11; Linux i686; U; pl; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.4) Gecko/20070509 Firefox/2.0.0 
Mozilla/5.0 (Windows NT 6.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Mozilla/5.0 (Windows NT 6.0; U; tr; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Mozilla/5.0 (Windows NT 6.0; U; sv; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Mozilla/5.0 (Windows NT 6.0; U; hu; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Mozilla/5.0 (Macintosh; PPC Mac OS X; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Mozilla/5.0 (Linux i686; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 
Firefox 2.0 
Mozilla/5.0 (X11;U;Linux i686;en-US;rv:1.8.1) Gecko/2006101022 Firefox/2.0 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1) Gecko/20061228 Firefox/2.0 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1) Gecko/20061024 Firefox/2.0 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.8.1) Gecko/20061211 Firefox/2.0 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.8.1) Gecko/20061024 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1) Gecko/20061202 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1) Gecko/20061128 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1) Gecko/20061122 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1) Gecko/20061023 SUSE/2.0-37 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1) Gecko/20060601 Firefox/2.0 (Ubuntu-edgy) 
Mozilla/5.0 (X11; U; Linux x86-64; en-US; rv:1.8.1) Gecko/20061010 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux i686; zh-TW; rv:1.8.1) Gecko/20061010 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux i686; tr-TR; rv:1.8.1) Gecko/20061023 SUSE/2.0-30 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1) Gecko/20061127 Firefox/2.0 (Gentoo Linux) 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1) Gecko/20061127 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1) Gecko/20061024 Firefox/2.0 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1) Gecko/20061010 Firefox/2.0 Ubuntu 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1) Gecko/20061010 Firefox/2.0 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.1) Gecko/20061003 Firefox/2.0 Ubuntu 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1) Gecko/20061010 Firefox/2.0

More Firefox 2.0 user agents strings –>>

Firefox 1.9.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; ; rv:1.8.0.7) Gecko/20060917 Firefox/1.9.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; ; rv:1.8.0.10) Gecko/20070216 Firefox/1.9.0.1 
Firefox 1.9.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; ; rv:1.8.0.1) Gecko/20060111 Firefox/1.9.0 
Firefox 1.6a1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9a1) Gecko/20060112 Firefox/1.6a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20060217 Firefox/1.6a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20060117 Firefox/1.6a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20051215 Firefox/1.6a1 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9a1) Gecko/20060127 Firefox/1.6a1 
Mozilla/5.0 (Windows; U; Windows NT 5.2 x64; en-US; rv:1.9a1) Gecko/20060214 Firefox/1.6a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060323 Firefox/1.6a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060121 Firefox/1.6a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20051220 Firefox/1.6a1 
Mozilla/5.0 (Windows NT 5.1; rv:1.9a1) Gecko/20060217 Firefox/1.6a1 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.9a1) Gecko/20051002 Firefox/1.6a1 
Firefox 1.5.0.9 
Mozilla/5.0 (X11; U; OpenBSD amd64; en-US; rv:1.8.0.9) Gecko/20070101 Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.9) Gecko/20070126 Ubuntu/dapper-security Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/1.5.0.9 (Debian-2.0.0.9-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20070316 CentOS/1.5.0.9-10.el5.centos Firefox/1.5.0.9 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20070126 Ubuntu/dapper-security Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20070102 Ubuntu/dapper-security Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20061221 Fedora/1.5.0.9-1.fc5 Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20061219 Fedora/1.5.0.9-1.fc6 Firefox/1.5.0.9 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20061215 Red Hat/1.5.0.9-0.1.el4 Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20060911 SUSE/1.5.0.9-3.2 Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20060911 SUSE/1.5.0.9-0.2 Firefox/1.5.0.9 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.9) Gecko/20061219 Fedora/1.5.0.9-1.fc6 Firefox/1.5.0.9 pango-text 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; tr; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9

More Firefox 1.5.0.9 user agents strings –>>

Firefox 1.5.0.8 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.0.8) Gecko/20061110 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; sv-SE; rv:1.8.0.8) Gecko/20061108 Fedora/1.5.0.8-1.fc5 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.0.8) Gecko/20061213 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.8) Gecko/20061115 Ubuntu/dapper-security Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.8) Gecko/20061110 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.8) Gecko/20061107 Fedora/1.5.0.8-1.fc6 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.8) Gecko/20060911 SUSE/1.5.0.8-0.2 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.8) Gecko/20060802 Mandriva/1.5.0.8-1.1mdv2007.0 (2007.0) Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.8) Gecko/20061115 Ubuntu/dapper-security Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.8) Gecko/20060911 SUSE/1.5.0.8-0.2 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; Linux Gentoo i686; pl; rv:1.8.0.8) Gecko/20061219 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.0.8) Gecko/20061210 Firefox/1.5.0.8 
Mozilla/5.0 (X11; U; FreeBSD amd64; en-US; rv:1.8.0.8) Gecko/20061116 Firefox/1.5.0.8 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8

More Firefox 1.5.0.8 user agents strings –>>

Firefox 1.5.0.7 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.0.7) Gecko/20060915 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.0.7) Gecko/20061017 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.0.7) Gecko/20060920 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; NetBSD amd64; fr-FR; rv:1.8.0.7) Gecko/20061102 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.7) Gecko/20060924 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.7) Gecko/20060921 Ubuntu/dapper-security Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.7) Gecko/20060919 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.7) Gecko/20060911 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; sk; rv:1.8.0.7) Gecko/20060909 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.8.0.7) Gecko/20060921 Ubuntu/dapper-security Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.7) Gecko/20060914 Firefox/1.5.0.7 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.0.7) Gecko/20060914 Firefox/1.5.0.7 (Swiftfox) Mnenhy/0.7.4.666 
Mozilla/5.0 (X11; U; Linux i686; ko-KR; rv:1.8.0.7) Gecko/20060913 Fedora/1.5.0.7-1.fc5 Firefox/1.5.0.7 pango-text 
Mozilla/5.0 (X11; U; Linux i686; hu; rv:1.8.0.7) Gecko/20060911 SUSE/1.5.0.7-0.1 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.0.7) Gecko/20060921 Ubuntu/dapper-security Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.0.7) Gecko/20060909 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.0.7) Gecko/20060830 Firefox/1.5.0.7 (Debian-1.5.dfsg+1.5.0.7-1~bpo.1) 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.0.7) Gecko/20060909 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-ZW; rv:1.8.0.7) Gecko/20061018 Firefox/1.5.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.7) Gecko/20061014 Firefox/1.5.0.7

More Firefox 1.5.0.7 user agents strings –>>

Firefox 1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060905 Fedora/1.5.0.6-10 Firefox/1.5.0.6 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060808 Fedora/1.5.0.6-2.fc5 Firefox/1.5.0.6 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060807 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060803 Firefox/1.5.0.6 (Swiftfox) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060802 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060728 SUSE/1.5.0.6-0.1 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 (Debian-1.5.dfsg+1.5.0.6-4) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 (Debian-1.5.dfsg+1.5.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.0.6) Gecko/20060808 Fedora/1.5.0.6-2.fc5 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.6) Gecko/20060808 Fedora/1.5.0.6-2.fc5 Firefox/1.5.0.6 pango-text 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); zh-TW; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); nl; rv:1.8.0.6) Gecko/20060728 SUSE/1.5.0.6-1.2 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.6) Gecko/20060728 SUSE/1.5.0.6-1.2 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); de; rv:1.8.0.6) Gecko/20060728 SUSE/1.5.0.6-1.3 Firefox/1.5.0.6 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); de; rv:1.8.0.6) Gecko/20060728 Firefox/1.5.0.6

More Firefox 1.5.0.6 user agents strings –>>

Firefox 1.5.0.5 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.8.0.5) Gecko/20060728 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.0.5) Gecko/20060819 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; NetBSD i386; en-US; rv:1.8.0.5) Gecko/20060818 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.5) Gecko/20060911 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; sv-SE; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Firefox/1.5.0.5 Mnenhy/0.7.4.666 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060831 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060820 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060813 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060812 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060806 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060803 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060801 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060719 Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.5) Gecko/20060731 Ubuntu/dapper-security Firefox/1.5.0.5 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.5) Gecko/20060726 Red Hat/1.5.0.5-0.el4.1 Firefox/1.5.0.5 pango-text

More Firefox 1.5.0.5 user agents strings –>>

Firefox 1.5.0.4 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.0.4) Gecko/20060628 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.8.0.4) Gecko/20060508 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.4) Gecko/20060614 Fedora/1.5.0.4-1.2.fc5 Firefox/1.5.0.4 pango-text Mnenhy/0.7.4.0 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.4) Gecko/20060527 SUSE/1.5.0.4-1.7 Firefox/1.5.0.4 Mnenhy/0.7.4.0 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060716 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060711 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060704 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060629 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060614 Fedora/1.5.0.4-1.2.fc5 Firefox/1.5.0.4 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060613 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060608 Ubuntu/dapper-security Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060527 SUSE/1.5.0.4-1.3 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060508 Firefox/1.5.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060406 Firefox/1.5.0.4 (Debian-1.5.dfsg+1.5.0.4-1)

More Firefox 1.5.0.4 user agents strings –>>

Firefox 1.5.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.3) Gecko/20060523 Ubuntu/dapper Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.3) Gecko/20060522 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.8.0.3) Gecko/20060523 Ubuntu/dapper Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.3) Gecko/20060523 Ubuntu/dapper Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.3) Gecko/20060504 Fedora/1.5.0.3-1.1.fc5 Firefox/1.5.0.3 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.3) Gecko/20060425 SUSE/1.5.0.3-7 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.3) Gecko/20060326 Firefox/1.5.0.3 (Debian-1.5.dfsg+1.5.0.3-2) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.3) Gecko/20060425 SUSE/1.5.0.3-7 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); ru; rv:1.8.0.3) Gecko/20060425 SUSE/1.5.0.3-7 Firefox/1.5.0.3 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.4) Gecko/20060508 Firefox/1.5.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; es-ES; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; es-ES; rv:1.8.0.3) Gecko/20060426 Firefox/1.5.0.3

More Firefox 1.5.0.3 user agents strings –>>

Firefox 1.5.0.2; 
Mozilla/5.0 (Windows; U; Windows NT 4.0; en-US; rv:1.8.0.2) Gecko/20060418 Firefox/1.5.0.2; 
Firefox 1.5.0.2 
Mozilla/5.0 (X11; U; OpenBSD sparc64; pl-PL; rv:1.8.0.2) Gecko/20060429 Firefox/1.5.0.2 
Mozilla/5.0 (X11; U; OpenBSD sparc64; en-CA; rv:1.8.0.2) Gecko/20060429 Firefox/1.5.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; de-AT; rv:1.8.0.2) Gecko/20060422 Firefox/1.5.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.2) Gecko/20060419 Fedora/1.5.0.2-1.2.fc5 Firefox/1.5.0.2 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.2) Gecko Firefox/1.5.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050921 Firefox/1.5.0.2 Mandriva/1.0.6-15mdk (2006.0) 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.0.2) Gecko/20060414 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv-SE; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.2) Gecko/20060419 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.2) Gecko/20060406 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.2) Gecko/20060309 Firefox/1.5.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.2) Gecko/20060308 Firefox/1.5.0.2

More Firefox 1.5.0.2 user agents strings –>>

Firefox 1.5.0.13pre 
Mozilla/5.0 (X11; U; Linux i686; sv-SE; rv:1.8.0.13pre) Gecko/20071126 Ubuntu/dapper-security Firefox/1.5.0.13pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.13pre) Gecko/20080207 Ubuntu/dapper-security Firefox/1.5.0.13pre 
Firefox 1.5.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.12) Gecko/20080419 CentOS/1.5.0.12-0.15.el4.centos Firefox/1.5.0.12 pango-text 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.12) Gecko/20070718 Red Hat/1.5.0.12-3.el5 Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.12) Gecko/20070530 Fedora/1.5.0.12-1.fc6 Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.0.12) Gecko/20070601 Ubuntu/dapper-security Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20071126 Fedora/1.5.0.12-7.fc6 Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070719 CentOS/1.5.0.12-0.3.el4.centos Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070530 Fedora/1.5.0.12-1.fc6 Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070529 Red Hat/1.5.0.12-0.1.el4 Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.0.12) Gecko/20070718 Fedora/1.5.0.12-4.fc6 Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.12) Gecko/20070731 Ubuntu/dapper-security Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.12) Gecko/20070719 CentOS/1.5.0.12-3.el5.centos Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.12) Gecko/20080326 CentOS/1.5.0.12-14.el5.centos Firefox/1.5.0.12 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.12) Gecko/20070731 Ubuntu/dapper-security Firefox/1.5.0.12 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv-SE; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ko; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.12

More Firefox 1.5.0.12 user agents strings –>>

Firefox 1.5.0.11 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.0.11) Gecko/20070327 Ubuntu/dapper-security Firefox/1.5.0.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.0.11) Gecko/20070327 Ubuntu/dapper-security Firefox/1.5.0.11 
Mozilla/5.0 (X11; U; Linux i686; cs-CZ; rv:1.8.0.11) Gecko/20070327 Ubuntu/dapper-security Firefox/1.5.0.11 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fi; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.12) Gecko/20070508 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.0; pl; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.0; it; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.0; es-ES; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11

More Firefox 1.5.0.11 user agents strings –>>

Firefox 1.5.0.10pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.0.10pre) Gecko/20070207 Firefox/1.5.0.10pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.10pre) Gecko/20070211 Firefox/1.5.0.10pre 
Firefox 1.5.0.10 
Mozilla/5.0 (X11; U; OpenBSD ppc; en-US; rv:1.8.0.10) Gecko/20070223 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.10) Gecko/20070409 CentOS/1.5.0.10-2.el5.centos Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; zh-TW; rv:1.8.0.10) Gecko/20070508 Fedora/1.5.0.10-1.fc5 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.8.0.10) Gecko/20070510 Fedora/1.5.0.10-6.fc6 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.0.10) Gecko/20070223 Fedora/1.5.0.10-1.fc5 Firefox/1.5.0.10 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070510 Fedora/1.5.0.10-6.fc6 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070409 CentOS/1.5.0.10-2.el5.centos Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070302 Ubuntu/dapper-security Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070226 Red Hat/1.5.0.10-0.1.el4 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070226 Fedora/1.5.0.10-1.fc6 Firefox/1.5.0.10 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070223 CentOS/1.5.0.10-0.1.el4.centos Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070221 Red Hat/1.5.0.10-0.1.el4 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070216 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20060911 SUSE/1.5.0.10-0.2 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-CA; rv:1.8.0.10) Gecko/20070223 Fedora/1.5.0.10-1.fc5 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; cs-CZ; rv:1.8.0.10) Gecko/20070313 Fedora/1.5.0.10-5.fc6 Firefox/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.0.10) Gecko/20060911 SUSE/1.5.0.10-0.2 Firefox/1.5.0.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv-SE; rv:1.8.0.10) Gecko/20070216 Firefox/1.5.0.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.8.0.10) Gecko/20070216 Firefox/1.5.0.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.0.10) Gecko/20070216 Firefox/1.5.0.10

More Firefox 1.5.0.10 user agents strings –>>

Firefox 1.5.0.1 
Mozilla/5.0 (ZX-81; U; CP/M86; en-US; rv:1.8.0.1) Gecko/20060111 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.0.1) Gecko/20060206 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-GB; rv:1.8.0.1) Gecko/20060206 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.8.0.1) Gecko/20060213 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; pl-PL; rv:1.8) Gecko/20051128 SUSE/1.5-0.1 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.1) Gecko/20060313 Fedora/1.5.0.1-9 Firefox/1.5.0.1 pango-text 
Mozilla/5.0 (X11; U; Linux i686; rv:1.8.0.1) Gecko/20060124 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.1) Gecko/20060313 Fedora/1.5.0.1-9 Firefox/1.5.0.1 pango-text Mnenhy/0.7.3.0 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.1) Gecko/20060201 Firefox/1.5.0.1 (Swiftfox) Mnenhy/0.7.3.0 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.1) Gecko/20060124 Firefox/1.5.0.1 Ubuntu 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.1) Gecko/20060124 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.0.1) Gecko/20060313 Fedora/1.5.0.1-9 Firefox/1.5.0.1 pango-text Mnenhy/0.7.3.0 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.0.1) Gecko/20060124 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.0.1) Gecko/20060124 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.0.1) Gecko/20060124 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.7) Gecko/20060911 Red Hat/1.5.0.7-0.1.el4 Firefox/1.5.0.1 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060404 Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060324 Ubuntu/dapper Firefox/1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060313 Fedora/1.5.0.1-9 Firefox/1.5.0.1 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060313 Debian/1.5.dfsg+1.5.0.1-4 Firefox/1.5.0.1

More Firefox 1.5.0.1 user agents strings –>>

Firefox 1.5.0 
Mozilla/5.0 (X11; Linux i686; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 
Mozilla/5.0 (Windows NT 5.2; U; de; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 
Mozilla/5.0 (Windows NT 5.1; U; tr; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 
Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 
Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 
Mozilla/5.0 (Windows 98; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 
Mozilla/5.0 (Macintosh; PPC Mac OS X; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 
Firefox 1.5 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8) Gecko/20051130 Firefox/1.5 
Mozilla/5.0 (X11; U; NetBSD i386; en-US; rv:1.8) Gecko/20060104 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.8) Gecko/20051231 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8) Gecko/20051212 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8) Gecko/20051201 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.8) Gecko/20051111 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8) Gecko/20051111 Firefox/1.5 Ubuntu 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8) Gecko/20051111 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; lt; rv:1.6) Gecko/20051114 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; lt-LT; rv:1.6) Gecko/20051114 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8) Gecko/20060113 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8) Gecko/20060110 Debian/1.5.dfsg-4 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8) Gecko/20051111 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.8) Gecko/20051111 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060806 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060130 Ubuntu/1.5.dfsg-4ubuntu6 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060119 Debian/1.5.dfsg-4ubuntu3 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060118 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060111 Firefox/1.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060110 Debian/1.5.dfsg-4 Firefox/1.5

More Firefox 1.5 user agents strings –>>

Firefox 1.4.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8b5) Gecko/20051008 Fedora/1.5-0.5.0.beta2 Firefox/1.4.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8b5) Gecko/20051006 Firefox/1.4.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8b5) Gecko/20051006 Firefox/1.4.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; tr; rv:1.8b5) Gecko/20051006 Firefox/1.4.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8b5) Gecko/20051006 Firefox/1.4.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8b5) Gecko/20051006 Firefox/1.4.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8b5) Gecko/20051006 Firefox/1.4.1 
Firefox 1.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8b4) Gecko/20050908 Firefox/1.4 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8b4) Gecko/20050908 Firefox/1.4 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8b4) Gecko/20050908 Firefox/1.4 
Firefox 1.1.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090403 Firefox/1.1.16 
Firefox 1.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.13) Gecko/20060413 Red Hat/1.0.8-1.4.1 Firefox/1.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.13) Gecko/20060411 Firefox/1.0.8 SUSE/1.0.8-0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20060410 Firefox/1.0.8 Mandriva/1.0.6-16.5.20060mdk (2006.0) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.7.13) Gecko/20060418 Fedora/1.0.8-1.1.fc4 Firefox/1.0.8 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.7.13) Gecko/20060418 Firefox/1.0.8 (Ubuntu package 1.0.8) 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.7.13) Gecko/20060411 Firefox/1.0.8 SUSE/1.0.8-0.2 
Mozilla/5.0 (X11; U; Linux i686; da-DK; rv:1.7.13) Gecko/20060411 Firefox/1.0.8 SUSE/1.0.8-0.2 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.7.12) Gecko/20051105 Firefox/1.0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.13) Gecko/20060410 Firefox/1.0.8 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.13) Gecko/20060410 Firefox/1.0.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.13) Gecko/20060410 Firefox/1.0.8 
Firefox 1.0.7 
Mozilla/5.0 (X11; U; x86_64 Linux; en_US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.12) Gecko/20050927 Firefox/1.0.7 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.12) Gecko/20050922 Firefox/1.0.7 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.7.12) Gecko/20051121 Firefox/1.0.7 (Nexenta package 1.0.7) 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.7.12) Gecko/20050922 Fedora/1.0.7-1.1.fc4 Firefox/1.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.12) Gecko/20060202 CentOS/1.0.7-1.4.3.centos4 Firefox/1.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.12) Gecko/20051218 Firefox/1.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.12) Gecko/20051127 Firefox/1.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.12) Gecko/20050922 Fedora/1.0.7-1.1.fc4 Firefox/1.0.7 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.7.12) Gecko/20051222 Firefox/1.0.7 
Mozilla/5.0 (X11; U; Linux ppc; da-DK; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; it-IT; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; hu-HU; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.7.12) Gecko/20051010 Firefox/1.0.7 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.7.12) Gecko/20050922 Firefox/1.0.7 (Debian package 1.0.7-1) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.7.12) Gecko/20050922 Fedora/1.0.7-1.1.fc4 Firefox/1.0.7

More Firefox 1.0.7 user agents strings –>>

Firefox 1.0.6 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.7.10) Gecko/20050919 (No IDN) Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.10) Gecko/20050724 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.7.10) Gecko/20050717 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.7.10) Gecko/20050730 Firefox/1.0.6 (Debian package 1.0.6-2) 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.7.10) Gecko/20050717 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.7.10) Gecko/20050721 Firefox/1.0.6 (Ubuntu package 1.0.6) 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.7.10) Gecko/20050716 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20051111 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20051106 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050920 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050918 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050911 Firefox/1.0.6 (Debian package 1.0.6-5) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050815 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050811 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050721 Firefox/1.0.6 (Ubuntu package 1.0.6) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050720 Fedora/1.0.6-1.1.fc4.k12ltsp.4.4.0 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050720 Fedora/1.0.6-1.1.fc3 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050719 Red Hat/1.0.6-1.4.1 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050716 Firefox/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050715 Firefox/1.0.6 SUSE/1.0.6-16

More Firefox 1.0.6 user agents strings –>>

Firefox 1.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 
Mozilla/5.0 (Windows; U; Windows NT5.1; en; rv:1.7.10) Gecko/20050716 Firefox/1.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.7.10) Gecko/20050716 Firefox/1.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.9) Gecko/20050711 Firefox/1.0.5 
Firefox 1.0.4 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.8) Gecko/20050512 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.8) Gecko/20050511 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.7.8) Gecko/20050524 Fedora/1.0.4-4 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.7.10) Gecko/20050925 Firefox/1.0.4 (Debian package 1.0.4-2sarge5) 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.7.8) Gecko/20050511 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.7.10) Gecko/20050925 Firefox/1.0.4 (Debian package 1.0.4-2sarge5) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050610 Firefox/1.0.4 (Debian package 1.0.4-3) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050524 Fedora/1.0.4-4 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050523 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050517 Firefox/1.0.4 (Debian package 1.0.4-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050513 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050513 Fedora/1.0.4-1.3.1 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050512 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050511 Firefox/1.0.4 SUSE/1.0.4-1.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050511 Firefox/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051010 Firefox/1.0.4 (Ubuntu package 1.0.7) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20070530 Firefox/1.0.4 (Debian package 1.0.4-2sarge17) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20070116 Firefox/1.0.4 (Debian package 1.0.4-2sarge15) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20061113 Firefox/1.0.4 (Debian package 1.0.4-2sarge13) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20060927 Firefox/1.0.4 (Debian package 1.0.4-2sarge12)

More Firefox 1.0.4 user agents strings –>>

Firefox 1.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.7) Gecko/20050421 Firefox/1.0.3 (Debian package 1.0.3-2) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.7.7) Gecko/20060303 Firefox/1.0.3 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.7.7) Gecko/20050420 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; da-DK; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Win98; fr-FR; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Win98; es-ES; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.7.7) Gecko/20050414 Firefox/1.0.3

More Firefox 1.0.3 user agents strings –>>

Firefox 1.0.2 
Mozilla/5.0 (X11; U; Linux x86_64; nl-NL; rv:1.7.6) Gecko/20050318 Firefox/1.0.2 
Mozilla/5.0 (X11; U; Linux i686; ru-RU; rv:1.7.6) Gecko/20050318 Firefox/1.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050317 Firefox/1.0.2 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.6) Gecko/20050325 Firefox/1.0.2 (Debian package 1.0.2-1) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-DE; rv:1.7.6) Gecko/20050321 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; tr-TR; rv:1.7.6) Gecko/20050321 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv-SE; rv:1.7.6) Gecko/20050318 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl-NL; rv:1.7.6) Gecko/20050318 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT; rv:1.7.6) Gecko/20050318 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.6) Gecko/20050318 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.6) Gecko/20050317 Firefox/1.0.2 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.6) Gecko/20050317 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.7.6) Gecko/20050321 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7.6) Gecko/20050321 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.6) Gecko/20050317 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-GB; rv:1.7.6) Gecko/20050321 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.7.6) Gecko/20050321 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Win98; fr-FR; rv:1.7.6) Gecko/20050318 Firefox/1.0.2 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.6) Gecko/20050317 Firefox/1.0.2 (ax) 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.6) Gecko/20050317 Firefox/1.0.2

More Firefox 1.0.2 user agents strings –>>

Firefox 1.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050317 Firefox/1.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050311 Firefox/1.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050310 Firefox/1.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050225 Firefox/1.0.1 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.7.6) Gecko/20050322 Firefox/1.0.1 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.7.6) Gecko/20050306 Firefox/1.0.1 (Debian package 1.0.1-2) 
Mozilla/5.0 (X11; U; Linux i686; cs-CZ; rv:1.7.6) Gecko/20050226 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:1.7.6) Gecko/20050226 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.6) Gecko/20050226 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.6) Gecko/20050225 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.6) Gecko/20050223 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.7.6) Gecko/20050226 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7.6) Gecko/20050226 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7.6) Gecko/20050223 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.6) Gecko/20050225 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.7.6) Gecko/20050226 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.7.6) Gecko/20050223 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.6) Gecko/20040206 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Win98; fr-FR; rv:1.7.6) Gecko/20050226 Firefox/1.0.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.6) Gecko/20050225 Firefox/1.0.1

More Firefox 1.0.1 user agents strings –>>

Firefox 1.0+ 
Mozilla/5.0 (X11; U; Linux i686; hu; rv:1.8b4) Gecko/20050827 Firefox/1.0+ 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8b4) Gecko/20050729 Firefox/1.0+ 
Firefox 1.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.7.6) Gecko/20050405 Firefox/1.0 (Ubuntu package 1.0.2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050405 Firefox/1.0 (Ubuntu package 1.0.2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20050814 Firefox/1.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20050221 Firefox/1.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20050210 Firefox/1.0 (Debian package 1.0+dfsg.1-6) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041218 Firefox/1.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041215 Firefox/1.0 Red Hat/1.0-12.EL4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041204 Firefox/1.0 (Debian package 1.0.x.2-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041128 Firefox/1.0 (Debian package 1.0-4) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041117 Firefox/1.0 (Debian package 1.0-2.0.0.45.linspire0.4) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.7.6) Gecko/20050405 Firefox/1.0 (Ubuntu package 1.0.2) 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.7.5) Gecko/20041108 Firefox/1.0 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.5) Gecko/20041128 Firefox/1.0 (Debian package 1.0-4) 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.7.5) Gecko/20041114 Firefox/1.0 
Mozilla/5.0 (X11; Linux i686; rv:1.7.5) Gecko/20041108 Firefox/1.0 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:1.7.5) Gecko/20041108 Firefox/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.7.5) Gecko/20041119 Firefox/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv-SE; rv:1.7.5) Gecko/20041108 Firefox/1.0

More Firefox 1.0 user agents strings –>>

Firefox 0.9.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7) Gecko/20040917 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Win 9x 4.90; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Firefox 0.9.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7) Gecko/20040802 Firefox/0.9.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.7) Gecko/20040707 Firefox/0.9.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040707 Firefox/0.9.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7) Gecko/20040707 Firefox/0.9.2 
Firefox 0.9.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7) Gecko/20040630 Firefox/0.9.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7) Gecko/20040626 Firefox/0.9.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.7) Gecko/20040626 Firefox/0.9.1 
Firefox 0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040614 Firefox/0.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7) Gecko/20040614 Firefox/0.9 
Firefox 0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.6) Gecko/20040614 Firefox/0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.6) Gecko/20040225 Firefox/0.8 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.6) Gecko/20040207 Firefox/0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.6) Gecko/20040206 Firefox/0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.6) Gecko/20040206 Firefox/0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.6) Gecko/20040206 Firefox/0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.6) Gecko/20040206 Firefox/0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.6) Gecko/20040206 Firefox/0.8 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.6) Gecko/20040206 Firefox/0.8 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.6) Gecko/20040206 Firefox/0.8 
Firefox 0.10.1 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.3) Gecko/20041020 Firefox/0.10.1 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.3) Gecko/20041001 Firefox/0.10.1 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.3) Gecko/20040914 Firefox/0.10.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; rv:1.7.3) Gecko/20041001 Firefox/0.10.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20040913 Firefox/0.10.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20040911 Firefox/0.10.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; rv:1.7.3) Gecko/20041001 Firefox/0.10.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; rv:1.7.3) Gecko/20040913 Firefox/0.10.1 
Mozilla/5.0 (Windows; U; Win98; rv:1.7.3) Gecko/20041001 Firefox/0.10.1 
Firefox 0.10 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.3) Gecko/20040914 Firefox/0.10 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.3) Gecko/20040913 Firefox/0.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20040913 Firefox/0.10 
Mozilla/5.0 (Windows; U; Windows NT 5.0; zh-TW; rv:1.8.0.1) Gecko/20060111 Firefox/0.10 
Mozilla/5.0 (Windows; U; Windows NT 5.0; rv:1.7.3) Gecko/20040913 Firefox/0.10 
Mozilla/5.0 (Windows; U; Win98; rv:1.7.3) Gecko/20040913 Firefox/0.10 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; rv:1.7.3) Gecko/20040913 Firefox/0.10 
Firefox 
Mozilla/5.0 (X11; U; Gentoo Linux x86_64; pl-PL) Gecko Firefox 
Mozilla/5.0 (X11; ; Linux x86_64; rv:1.8.1.6) Gecko/20070802 Firefox 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.0.6) Gecko/2009011913 Firefox 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; rv:1.8.1.16) Gecko/20080702 Firefox 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.13) Gecko/20080313 Firefox 
Flock

Click on any string to get more details

Flock 2.5.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 Flock/2.5.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 AppleWebKit/531.21.8 KHTML/4.3.5 (like Gecko) Firefox/3.5.7 Flock/2.5.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 AppleWebKit/531.21.8 KHTML/4.3.2 (like Gecko) Firefox/3.5.7 Flock/2.5.6 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 AppleWebKit/531.21.8 (KHTML, like Gecko) Firefox/3.5.7 Flock/2.5.6 (.NET CLR 3.5.30729) 
Flock 2.0b3 
Mozilla/5.0 (X11; U; Linux x86_64; es-AR; rv:1.9.0.2) Gecko/2008091920 Firefox/3.0.2 Flock/2.0b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.2) Gecko/2008092122 Firefox/3.0.2 Flock/2.0b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.2) Gecko/2008083108 Firefox/3.0.2 Flock/2.0b3 
Flock 2.0b2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1) Gecko/2008071523 Firefox/3.0.1 Flock/2.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008071523 Firefox/3.0.1 Flock/2.0b2 
Flock 2.0b1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9) Gecko/2008061302 Firefox/3.0 Flock/2.0b1 
Flock 2.0a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9pre) Gecko/2008051917 Firefox/3.0pre Flock/2.0a1pre 
Flock 2.0.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.5) Gecko/2008121620 Firefox/3.0.5 Flock/2.0.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.4; en-US; rv:1.9.0.5) Gecko/2008121716 Firefox/3.0.5 Flock/2.0.3 
Flock 2.0.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.4) Gecko/2008112016 Firefox/3.0.4 Flock/2.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.4) Gecko/2008112016 Firefox/3.0.4 Flock/2.0.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.4) Gecko/2008111323 Firefox/3.0.4 Flock/2.0.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.4; en-US; rv:1.9.0.4) Gecko/2008111323 Firefox/3.0.4 Flock/2.0.2 
Flock 2.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008100719 Firefox/3.0.3 Flock/2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008100719 Firefox/3.0.3 Flock/2.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.3) Gecko/2008100716 Firefox/3.0.3 Flock/2.0 
Flock 1.2.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.18) Gecko/20081107 Firefox/2.0.0.18 Flock/1.2.7 
Flock 1.2.6 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.17) Gecko/20080913 Firefox/2.0.0.17 Flock/1.2.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; it; rv:1.8.1.17) Gecko/20080922 Firefox/2.0.0.17 Flock/1.2.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.17) Gecko/20080915 Firefox/2.0.0.17 Flock/1.2.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17) Gecko/20080915 Firefox/2.0.0.17 Flock/1.2.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17) Gecko/20080910 Firefox/2.0.0.17 Flock/1.2.6 
Flock 1.2.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.16) Gecko/20080831 Firefox/2.0.0.16 Flock/1.2.5 
Flock 1.2.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.16) Gecko/20080714 Firefox/2.0.0.16 Flock/1.2.4 
Flock 1.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.8.1.15) Gecko/20080706 Firefox/2.0.0.15 Flock/1.2.3 
Flock 1.2.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.14) Gecko/20080608 Firefox/2.0.0.14 Flock/1.2.2 
Flock 1.2.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080530 Firefox/2.0.0.14 Flock/1.2.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl; rv:1.8.1.14) Gecko/20080519 Firefox/2.0.0.14 Flock/1.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.8.1.14) Gecko/20080603 Firefox/2.0.0.14 Flock/1.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.14) Gecko/20080530 Firefox/2.0.0.14 Flock/1.2.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.14) Gecko/20080530 Firefox/2.0.0.14 Flock/1.2.1 
Flock 1.1.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.14) Gecko/20080514 Firefox/2.0.0.14 Flock/1.1.4 
Flock 1.1.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080414 Firefox/2.0.0.14 Flock/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.14) Gecko/20080414 Firefox/2.0.0.14 Flock/1.1.2 
Flock 1.1.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.13) Gecko/20080326 Firefox/2.0.0.13 Flock/1.1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080326 Firefox/2.0.0.13 Flock/1.1.1 
Flock 1.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080304 Firefox/2.0.0.12 Flock/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080304 Firefox/2.0.0.12 Flock/1.1 
Flock 1.0rc3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.8) Gecko/20071018 Firefox/2.0.0.8 Flock/1.0RC3 
Flock 1.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080211 Firefox/2.0.0.12 Flock/1.0.9 
Flock 1.0.8 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.8.1.11) Gecko/20080131 Firefox/2.0.0.11 Flock/1.0.8 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.11) Gecko/20080126 Firefox/2.0.0.11 Flock/1.0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11) Gecko/20080126 Firefox/2.0.0.11 Flock/1.0.8 
Flock 1.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11) Gecko/20071231 Firefox/2.0.0.11 Flock/1.0.5 
Flock 1.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071206 Firefox/2.0.0.11 Flock/1.0.3 
Flock 1.0.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.9) Gecko/20071106 Firefox/2.0.0.9 Flock/1.0.1 
Flock 1.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.8) Gecko/20071101 Firefox/2.0.0.8 Flock/1.0 
Flock 0.9.1.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20071013 Firefox/2.0.0.7 Flock/0.9.1.3 
Flock 0.9.1.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.7) Gecko/20070925 Firefox/2.0.0.7 Flock/0.9.1.2 
Flock 0.9.1.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.6) Gecko/20070914 Firefox/2.0.0.6 Flock/0.9.1.0 
Flock 0.9.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070801 Firefox/2.0.0.6 Flock/0.9.0.2 
Flock 0.9.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4) Gecko/20070707 Firefox/2.0.0.4 Flock/0.9.0 
Flock 0.7.99 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070307 Firefox/2.0.0.2 Flock/0.7.99 
Flock 0.7.9.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.9pre) Gecko/20061219 Firefox/1.5.0.9 Flock/0.7.9.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.9) Gecko/20061219 Flock/0.7.9.1 
Flock 0.7.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.8) Gecko/20061025 Firefox/1.5.0.8 Flock/0.7.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.7) Gecko/20061025 Firefox/1.5.0.8 Flock/0.7.8 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.8) Gecko/20061109 Firefox/1.5.0.8 Flock/0.7.8 
Flock 0.7.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.7) Gecko/20060929 Firefox/1.5.0.7 Flock/0.7.6 
Flock 0.7.5.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.7) Gecko/20060915 Firefox/1.5.0.7 Flock/0.7.5.1 
Flock 0.7.4.1 
Mozilla/5.0 (X11; U; Linux ia64; pl; rv:1.8.0.5) Gecko/20060801 Firefox/1.5.0.5 Flock/0.7.4.1 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.5) Gecko/20060801 Firefox/1.5.0.5 Flock/0.7.4.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.5) Gecko/20060731 Firefox/1.5.0.5 Flock/0.7.4.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.8.0.5) Gecko/20060801 Firefox/1.5.0.5 Flock/0.7.4.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.5) Gecko/20060731 Firefox/1.5.0.5 Flock/0.7.4.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.5) Gecko/20060731 Firefox/1.5.0.5 Flock/0.7.4.1 
Flock 0.7.14 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.12) Gecko/20070530 Firefox/1.5.0.12 Flock/0.7.14 
Flock 0.7.13.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.11) Gecko/20070501 Firefox/1.5.0.11 Flock/0.7.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.11) Gecko/20070502 Firefox/1.5.0.11 Flock/0.7.13.1 
Flock 0.7.12 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.11) Gecko/20070321 Firefox/1.5.0.11 Flock/0.7.12 
Flock 0.7.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.10) Gecko/20070228 Firefox/1.5.0.10 Flock/0.7.11 
Flock 0.7.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.4) Gecko/20060620 Firefox/1.5.0.4 Flock/0.7.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.4) Gecko/20060620 Firefox/1.5.0.4 Flock/0.7.1 
Flock 0.7.0.17.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060612 Firefox/1.5.0.4 Flock/0.7.0.17.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.4) Gecko/20060612 Firefox/1.5.0.4 Flock/0.7.0.17.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.4) Gecko/20060612 Firefox/1.5.0.4 Flock/0.7.0.17.1 
Flock 0.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.1) Gecko/20060331 Flock/0.7 
Flock 0.5.13.2 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.8.0.1) Gecko/20060314 Flock/0.5.13.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060314 Flock/0.5.13.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.1) Gecko/20060314 Flock/0.5.13.2 
Flock 0.5.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060217 Flock/0.5.11 
Flock 0.4.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060102 Flock/0.4.11 Firefox/1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8) Gecko/20051119 Flock/0.4.11 Firefox/1.0+ 
Flock 0.4 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8b5) Gecko/20051019 Flock/0.4 Firefox/1.0+ 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8b5) Gecko/20051103 Flock/0.4 Firefox/1.0+ 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8b5) Gecko/20051021 Flock/0.4 Firefox/1.0+ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8b5) Gecko/20051021 Flock/0.4 Firefox/1.0+ 
Fluid 
Browser for Mac OS X Leopard, developed by Todd Ditchendorf

Click on any string to get more details

Fluid 0.9.6 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; nl-nl) AppleWebKit/532.3+ (KHTML, like Gecko) Fluid/0.9.6 Safari/532.3+ 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; nl-nl) AppleWebKit/531.9 (KHTML, like Gecko) Fluid/0.9.6 Safari/531.9 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.16 (KHTML, like Gecko) Fluid/0.9.6 Safari/528.16 
Fluid 0.9.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Fluid/0.9.4 Safari/525.13 
Galaxy 
Web browser for the TraOS Operating System

Click on any string to get more details

Galaxy 1.0 
Galaxy/1.0 [en] (Mac OS X 10.5.6; U; en) 
Galaxy/1.0 [en] (Mac OS X 10.5.6) 
Galeon

Click on any string to get more details

Galeon 2.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko/20090327 Galeon/2.0.7 
Galeon 2.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko Galeon/2.0.6 (Ubuntu 2.0.6-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko Galeon/2.0.6 (Debian 2.0.6-2.1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko Galeon/2.0.6 (Ubuntu 2.0.6-2.1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080716 (Gentoo) Galeon/2.0.6 
Galeon 2.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081216 Galeon/2.0.4 Firefox/2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080716 (Gentoo) Galeon/2.0.4 
Galeon 2.0.3 
Mozilla/5.0 (X11; U; Linux sparc64; en-GB; rv:1.8.1.11) Gecko/20071217 Galeon/2.0.3 Firefox/2.0.0.11 
Galeon 2.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070508 (Debian-1.8.1.4-3) Galeon/2.0.2 (Debian package 2.0.2-4) 
Galeon 2.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060627 Galeon/2.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.13pre) Gecko/20080207 Galeon/2.0.1 (Ubuntu package 2.0.1-1ubuntu2) Firefox/1.5.0.13pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/Debian-1.8.0.1-5 Galeon/2.0.1 (Debian package 2.0.1-3) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060027 (Debian-1.8.0.1-11) Galeon/2.0.1 (Debian package 2.0.1-3) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.13) Gecko/20060501 Galeon/2.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20060122 Galeon/2.0.1 
Galeon 2.0.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051007 Galeon/2.0.0 (Debian package 2.0.0-1) 
Galeon 1.3.4 
Mozilla/5.0 (X11; U; Linux i686) Gecko/20030430 Galeon/1.3.4 Debian/1.3.4.20030509-1 
Mozilla/5.0 (X11; U; Linux i686) Gecko/20030327 Galeon/1.3.4 Debian/1.3.3.20030419-1 
Galeon 1.3.21 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20050929 Galeon/1.3.21 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.7.12) Gecko/20051007 Galeon/1.3.21 (Debian package 1.3.21-8) 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.7.12) Gecko/20051105 Galeon/1.3.21 
Galeon 1.3.20 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050718 Galeon/1.3.20 (Debian package 1.3.20-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050513 Galeon/1.3.20 (Debian package 1.3.20-1) 
Galeon 1.3.19 
Mozilla/5.0 (X11; U; Linux i686; hu; rv:1.7.3) Gecko/20050130 Galeon/1.3.19 
Galeon 1.3.18 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.3) Gecko/20041007 Galeon/1.3.18 (Debian package 1.3.18-1.1) 
Galeon 1.3.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.2) Gecko/20040906 Galeon/1.3.17 
Galeon 1.3.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.6) Gecko/20040510 Galeon/1.3.16 
Galeon 1.3.15 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.6) Gecko/20040406 Galeon/1.3.15 
Galeon 1.3.14 
Mozilla/5.0 (X11; U; Linux; i686; en-US; rv:1.6) Gecko Galeon/1.3.14 
Galeon 1.2.9 
Mozilla/5.0 Galeon/1.2.9 (X11; Linux i686; U;) Gecko/20021213 Debian/1.2.9-0.bunk 
Galeon 1.2.8 
Mozilla/5.0 Galeon/1.2.8 (X11; Linux i686; U;) Gecko/20030317 
Mozilla/5.0 Galeon/1.2.8 (X11; Linux i686; U;) Gecko/20030212 
Galeon 1.2.7 
Mozilla/5.0 Galeon/1.2.7 (X11; Linux i686; U;) Gecko/20021226 Debian/1.2.7-6 
Galeon 1.2.6 
Mozilla/5.0 Galeon/1.2.6 (X11; Linux i686; U;) Gecko/20020916 
Mozilla/5.0 Galeon/1.2.6 (X11; Linux i686; U;) Gecko/20020913 Debian/1.2.6-2 
Mozilla/5.0 Galeon/1.2.6 (X11; Linux i686; U;) Gecko/20020830 
Mozilla/5.0 Galeon/1.2.6 (X11; Linux i686; U;) Gecko/20020827 
Mozilla/5.0 Galeon/1.2.6 (X11; Linux i586; U;) Gecko/20020916 
Galeon 1.2.5 
Mozilla/5.0 Galeon/1.2.5 (X11; Linux i686; U;) Gecko/20020809 
Mozilla/5.0 Galeon/1.2.5 (X11; Linux i686; U;) Gecko/20020623 Debian/1.2.5-0.woody.1 
Mozilla/5.0 Galeon/1.2.5 (X11; Linux i686; U;) Gecko/20020610 Debian/1.2.5-1 
Mozilla/5.0 Galeon/1.2.5 (X11; Linux i686; U;) Gecko/0 
Mozilla/5.0 Galeon/1.2.5 (X11; Linux i586; U;) Gecko/20020623 Debian/1.2.5-0.woody.1 
Galeon 1.0.3 
Mozilla/5.0 Galeon/1.0.3 (X11; Linux i686; U;) Gecko/0 
GranParadiso 
GranParadiso is an developer preview release for the next major version of Firefox that is being built on top of the next generation of Mozilla’s layout engine, Gecko 1.9.

Click on any string to get more details

GranParadiso 3.1 
Mozilla/5.0(X11;U;Linux(x86_64);en;rv:1.9a8)Gecko/2007100619;GranParadiso/3.1 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.9a8) Gecko/2007100620 GranParadiso/3.1 
GranParadiso 3.0a8 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.9a8) Gecko/2007100620 GranParadiso/3.0a8 
GranParadiso 3.0a7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a7) Gecko/2007080210 GranParadiso/3.0a7 
GranParadiso 3.0a5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a5) Gecko/20070605 GranParadiso/3.0a5 
GranParadiso 3.0a4 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9a4) Gecko/20070427 GranParadiso/3.0a4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a4) Gecko/20070427 GranParadiso/3.0a4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a4) Gecko/2007042705 GranParadiso/3.0a4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a4) Gecko/20070427 GranParadiso/3.0a4 
GranParadiso 3.0a3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a3) Gecko/20070322 GranParadiso/3.0a3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a3) Gecko/20070322 GranParadiso/3.0a3 
GranParadiso 3.0a2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2) Gecko/20070206 GranParadiso/3.0a2 
GranParadiso 3.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20061204 GranParadiso/3.0a1 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9a1) Gecko/20061204 GranParadiso/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9a1) Gecko/20061204 GranParadiso/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061204 GranParadiso/3.0a1 MEGAUPLOAD 1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061204 GranParadiso/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a1) Gecko/20061204 GranParadiso/3.0a1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.9a1) Gecko/20061204 GranParadiso/3.0a1 
GranParadiso 3.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.9) Gecko/2009042210 GranParadiso/3.0.9 
GranParadiso 3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009033008 GranParadiso/3.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko/2009033017 GranParadiso/3.0.8 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.9.0.8) Gecko/2009033017 GranParadiso/3.0.8 
Mozilla/5.0 (X11; U; Darwin i386; en-US; rv:1.9.0.8) Gecko/2009040414 GranParadiso/3.0.8 
GranParadiso 3.0.7pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.0.7pre) Gecko/2009012106 GranParadiso/3.0.7pre 
GranParadiso 3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.7) Gecko/2009030719 GranParadiso/3.0.7 FirePHP/0.2.4 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.9.0.7) Gecko/2009030719 GranParadiso/3.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko/2009030719 GranParadiso/3.0.7 FirePHP/0.2.4 
GranParadiso 3.0.4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.4pre) Gecko/2008092704 GranParadiso/3.0.4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.4pre) Gecko/2008102405 GranParadiso/3.0.4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.4pre) Gecko/2008101305 GranParadiso/3.0.4pre 
GranParadiso 3.0.3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3pre) Gecko/2008092604 GranParadiso/3.0.3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3pre) Gecko/2008091304 GranParadiso/3.0.3pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.3pre) Gecko/2008090704 GranParadiso/3.0.3pre 
GranParadiso 3.0.2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.2pre) Gecko/2008072405 GranParadiso/3.0.2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.2pre) Gecko/2008071405 GranParadiso/3.0.2pre 
GranParadiso 3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.1) Gecko/2008071818 GranParadiso/3.0.1 
GranParadiso 3.0 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9) Gecko/20070314 GranParadiso/3.0 
GranParadiso 2.0.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a3) Gecko/20070409 GranParadiso/2.0.0.3 
GranParadiso 2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a1) Gecko/20061204 GranParadiso/2.0 
GreenBrowser 
Internet Explorer based browser from the Chinese Company MoreQuick

Click on any string to get more details

GreenBrowser 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; Media Center PC 5.0; .NET CLR 3.5.21022; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; InfoPath.2; .NET CLR 3.0.30729; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; OfficeLiveConnector.1.4; OfficeLivePatch.1.3; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; GTB6; .NET CLR 2.0.50727; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; GTB6; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 1.1.4322; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; GTB6.3; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 1.1.4322; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 4.0.20506; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 1.1.4322; InfoPath.2; GreenBrowser)
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; InfoPath.2; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0; .NET CLR 2.0.50727; InfoPath.1; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 1.1.4322; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 1.1.4322; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 1.1.4322; .NET CLR 3.0.04506.648; InfoPath.1; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.2; .NET CLR 2.0.50727; GreenBrowser)

More GreenBrowser user agents strings –>>

Hana 
Hana is a specialized tabbed browser for web-apps. No bookmarks or favorites. No address bar. Just a row of tabs. One tab for each of your web-apps. From All Out Software.

Click on any string to get more details

Hana 1.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) Hana/1.1 
Hana 1.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/417.9 (KHTML, like Gecko) Hana/1.0 
Mozilla/5.0 (Macintosh; U; i386 Mac OS X; en) AppleWebKit/417.9 (KHTML, like Gecko) Hana/1.0 
HotJava 
Web browser from Sun Microsystems implemented in Java, discontinued

Click on any string to get more details

HotJava 1.1.2 
HotJava/1.1.2 FCS 
HotJava 1.0.1 
HotJava/1.0.1/JRE1.1.x 
IBM WebExplorer 
Early web browser designed by IBM for OS/2.

Click on any string to get more details

IBM WebExplorer v0.94 
IBM WebExplorer /v0.94 
IBrowse

Click on any string to get more details

IBrowse 3.0 
Mozilla/5.0 (compatible; IBrowse 3.0; AmigaOS4.0) 
IBrowse 2.3 
Mozilla/4.0 (compatible; IBrowse 2.3; AmigaOS4.0) 
IBrowse/2.3 (AmigaOS 3.9) 
iCab

Click on any string to get more details

iCab 4.5 
iCab/4.5 (Macintosh; U; PPC Mac OS X) 
iCab/4.5 (Macintosh; U; Mac OS X Leopard 10.5.7) 
iCab 4.0 
iCab/4.0 (Macintosh; U; Intel Mac OS X) 
iCab/4.0 (Windows; U; Windows NT 6.0; en-gb) 
iCab 3.0.5 
Mozilla/5.0 (compatible; iCab 3.0.5; Macintosh; U; PPC Mac OS) 
Mozilla/5.0 (compatible; iCab 3.0.5; Macintosh; U; PPC Mac OS X) 
iCab 3.0.3 
Mozilla/5.0 (compatible; iCab 3.0.3; Macintosh; U; PPC Mac OS) 
Mozilla/5.0 (compatible; iCab 3.0.3; Macintosh; U; PPC Mac OS X) 
iCab 3.0.2 
Mozilla/5.0 (compatible; iCab 3.0.2; Macintosh; U; PPC Mac OS) 
Mozilla/5.0 (compatible; iCab 3.0.2; Macintosh; U; PPC Mac OS X) 
iCab/3.0.2 (Macintosh; U; PPC Mac OS) 
iCab/3.0.2 (Macintosh; U; PPC Mac OS X) 
iCab 3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS; en) iCab 3 
iCab 2.9.9 
Mozilla/4.5 (compatible; iCab 2.9.9; Macintosh; U; 68K) 
iCab/2.9.9 (Macintosh; U; 68K) 
iCab 2.9.8 
iCab/2.9.8 (Macintosh; U; 68K) 
iCab 2.9.7 
iCab/2.9.7 (Macintosh; U; PPC) 
iCab 2.9.5 
Mozilla/4.5 (compatible; iCab 2.9.5; Macintosh; U; PPC; Mac OS X) 
iCab/2.9.5 (Macintosh; U; PPC; Mac OS X) 
iCab 2.9.1 
Mozilla/4.5 (compatible; iCab 2.9.1; Macintosh; U; PPC; Mac OS X) 
Mozilla/4.5 (compatible; iCab 2.9.1; Macintosh; U; PPC) 
iCab/2.9.1 (Macintosh; U; PPC) 
iCab 2.8.1 
Mozilla/4.5 (compatible; iCab 2.8.1; Macintosh; I; PPC) 
Iceape 
The Iceape Internet Suite is an unbranded Seamonkey Internet Suite for the debian GNU/Linux distribution

Click on any string to get more details

Iceape 1.1.9 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.1.13) Gecko/20080313 Iceape/1.1.9 (Debian-1.1.9-5) 
Iceape 1.1.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.9) Gecko/20071030 Iceape/1.1.6 (Debian-1.1.6-3) 
Iceape 1.1.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071008 Iceape/1.1.5 (Ubuntu-1.1.5-1ubuntu0.7.10) 
Iceape 1.1.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070509 Iceape/1.1.2 (Debian-1.1.2-1) 
Iceape 1.1.14 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.19) Gecko/20081204 Iceape/1.1.14 (Debian-1.1.14-1) Mnenhy/0.7.6.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081204 Iceape/1.1.14 (Debian-1.1.14-1) 
Iceape 1.0.9 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.0.13pre) Gecko/20070505 Iceape/1.0.9 (Debian-1.0.10~pre070720-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.13pre) Gecko/20070505 Iceape/1.0.9 (Debian-1.0.10~pre070720-0etch3) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070510 Iceape/1.0.9 (Debian-1.0.9-0etch1) 
Iceape 1.0.8 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.0.11) Gecko/20070217 Iceape/1.0.8 (Debian-1.0.8-4) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.11) Gecko/20070217 Iceape/1.0.8 (Debian-1.0.8-4) 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.8.0.11) Gecko/20070217 Iceape/1.0.8 (Debian-1.0.8-4) 
Iceape 1.0.7 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.0.9) Gecko/20061219 Iceape/1.0.7 (Debian-1.0.7-3) 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.0.9) Gecko/20061219 Iceape/1.0.7 (Debian-1.0.7-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20061219 Iceape/1.0.7 (Debian-1.0.7-3) 
IceCat 
IceCat is the GNU version of the Firefox browser. The main difference is: it is entirely free software. While the source code from the Mozilla project is free software, the binaries that they release include additional non-free software.

Click on any string to get more details

IceCat 3.0.3-g1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3) Gecko/2008092921 IceCat/3.0.3-g1 
Mozilla/5.0 (X11; U; Linux i686; en-CA; rv:1.9.0.3) Gecko/2008092921 IceCat/3.0.3-g1 
IceCat 3.0.2-g1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008100722 IceCat/3.0.2-g1 
IceCat 3.0.1-g1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1) Gecko/2008072716 IceCat/3.0.1-g1 
IceCat 3.0-g1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9) Gecko/2008061920 IceCat/3.0-g1 
IceCat 2.0.0.11-g1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11) Gecko/20071203 IceCat/2.0.0.11-g1 
Iceweasel 
Debian Iceweasel is based on the modified version of Firefox provided in the Firefox package, but has now removed the Firefox branding replacing it with a new set that fits with the new name. Thunderbird and SeaMonkey have been renamed to Icedove and Iceape respectively in the same way. 
There is another project called IceWeasel (with capital W!) which is the GNU version of the Firefox browser. Its main advantage is an ethical one: it is entirely free software. more information

Click on any string to get more details

Iceweasel 3.6.3 
Mozilla/5.0 (X11; U; Linux i686; pt-PT; rv:1.9.2.3) Gecko/20100402 Iceweasel/3.6.3 (like Firefox/3.6.3) GTB7.0 
Iceweasel 3.6 
Mozilla/5.0 (X11; U; Linux i686; pt-PT; rv:1.9.2.3) Gecko/20100402 Iceweasel/3.6 (like Firefox/3.6) GTB7.0 
Iceweasel 3.5.8 
Mozilla/5.0 (X11; U; Linux x86_64; ja; rv:1.9.1.8) Gecko/20100324 Iceweasel/3.5.8 (like Firefox/3.5.8) 
Iceweasel 3.5.5 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.1.5) Gecko/20091112 Iceweasel/3.5.5 (like Firefox/3.5.5; Debian-3.5.5-1) 
Iceweasel 3.5.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.3) Gecko/20091010 Iceweasel/3.5.3 (Debian-3.5.3-2) 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-GB; rv:1.9.1.3) Gecko/20091010 Iceweasel/3.5.3 (Debian-3.5.3-2) 
Iceweasel 3.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1) Gecko/20090704 Iceweasel/3.5 (Debian-3.5-0) 
Iceweasel 3.1b3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b3pre) Gecko/20090207 Ubuntu/9.04 (jaunty) IceWeasel/3.1b3pre 
Iceweasel 3.0b5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b5) Gecko/2008042623 Iceweasel/3.0b5 (Debian-3.0~b5-3) 
Iceweasel 3.0.9 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.11) Gecko/2009061208 Iceweasel/3.0.9 (Debian-3.0.9-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.18) Gecko/2010021720 Iceweasel/3.0.9 (Debian-3.0.9-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.11) Gecko/2009061212 Iceweasel/3.0.9 (Debian-3.0.9-1) GTB5 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.7) Gecko/2009030814 Iceweasel/3.0.9 (Debian-3.0.9-1) 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.9.0.11) Gecko/2009061212 Iceweasel/3.0.9 (Debian-3.0.9-1) 
Iceweasel 3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009033109 Gentoo Iceweasel/3.0.8 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.8) Gecko/2009032917 Gentoo Iceweasel/3.0.8 
Iceweasel 3.0.7 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.7) Gecko/2009030810 Iceweasel/3.0.7 (Debian-3.0.7-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.8) Gecko/2009032809 Iceweasel/3.0.7 (Debian-3.0.7-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.6) Gecko/2009020407 Iceweasel/3.0.7 (Debian-3.0.7-1) 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.7) Gecko/2009030810 Iceweasel/3.0.7 (Debian-3.0.7-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko/2009032811 Iceweasel/3.0.7 (Debian-3.0.7-1) 
Iceweasel 3.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.7) Gecko/2009032813 Iceweasel/3.0.6 Firefox/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.9.0.7) Gecko/2009031819 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko/2009032813 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.12) Gecko/2009072220 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.11) Gecko/2009061208 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.7) Gecko/2009031819 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.16) Gecko/2009121609 Iceweasel/3.0.6 (Debian-3.0.6-3) 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.9.0.11) Gecko/2009061212 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.9.0.7) Gecko/2009032803 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.6) Gecko/2009020409 Iceweasel 3.0.6 (Debian 5.0 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.9.0.13) Gecko/2009082121 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.11) Gecko/2009061212 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.0.7) Gecko/2009032803 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko/2009032803 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko/2009032018 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009020409 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.6) Gecko/2009020409 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9.0.6) Gecko/2009020409 Iceweasel/3.0.6 (Debian-3.0.6-1) 
Iceweasel 3.0.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2008122903 Gentoo Iceweasel/3.0.5 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.5) Gecko/2008122011 Iceweasel/3.0.5 (Debian-3.0.5-1) 
Iceweasel 3.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; cs-CZ; rv:1.9.0.4) Gecko/2008112309 Iceweasel/3.0.4 (Debian-3.0.4-1) 
Iceweasel 3.0.3 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.9.0.1) Gecko/2008072112 Iceweasel/3.0.3 (Debian-3.0.3-2) 
Iceweasel 3.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko/2008090211 Ubuntu/9.04 (jaunty) Iceweasel/3.0.2 
Iceweasel 3.0.12 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.11) Gecko/2009061212 Iceweasel/3.0.12 (Debian-3.0.12-1) 
Iceweasel 3.0.11 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.9.0.11) Gecko/2009061319 Iceweasel/3.0.11 (Debian-3.0.11-1) 
Iceweasel 3.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.1) Gecko/2008071420 Iceweasel/3.0.1 (Debian-3.0.1-1) 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.9.0.1) Gecko/2008072112 Iceweasel/3.0.1 (Debian-3.0.1-1) 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.1) Gecko/2008071618 Iceweasel/3.0.1 (Debian-3.0.1-1) 
Mozilla/5.0 (Linux X86; U; Debian SID; it; rv:1.9.0.1) Gecko/2008070208 Debian IceWeasel/3.0.1 
Iceweasel 3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9) Gecko/2008062908 Iceweasel/3.0 (Debian-3.0~rc2-2) 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.9) Gecko/2008062909 Iceweasel/3.0 (Debian-3.0~rc2-2) 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9) Gecko/2008062113 Iceweasel/3.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9) Gecko/2008062113 Iceweasel/3.0 (Debian-3.0~rc2-2) 
Iceweasel 2.0.0.9 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.9) Gecko/20071025 Iceweasel/2.0.0.9 (Debian-2.0.0.9-2) 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.9) Gecko/20071025 Iceweasel/2.0.0.9 
Mozilla/15.0 (X11; U; Linux i686; es-ES; rv:1.8.1.9) Gecko/20071025 Iceweasel/2.0.0.9 
Iceweasel 2.0.0.8 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.8.1.8) Gecko/20071004 Iceweasel/2.0.0.8 (Debian-2.0.0.6+2.0.0.8-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071004 Iceweasel/2.0.0.8 (Debian-2.0.0.6+2.0.0.8-0etch1) 
Iceweasel 2.0.0.7 
Mozilla/5.0 (X11; U; Linux x64; en-US; rv:1.8.1.7) Gecko/20070914 Iceweasel/2.0.0.7 (Debian-2.0.0.7-1) 
Iceweasel 2.0.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.6) Gecko/20070723 Iceweasel/2.0.0.6 (Debian-2.0.0.6-0etch1) 
Mozilla/5.0 (X11; U; Linux x64; en-US; rv:1.8.1.6) Gecko/20070723 Iceweasel/2.0.0.6 (Debian-2.0.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.6) Gecko/20070723 Iceweasel/2.0.0.6 (Debian-2.0.0.6-0etch1+lenny1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.6) Gecko/20070723 Iceweasel/2.0.0.6 (Debian-2.0.0.6-0etch1+lenny1) (.NET CLR 3.5.30729) 
Iceweasel 2.0.0.4 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.4) Gecko/20070508 Iceweasel/2.0.0.4 (Debian-2.0.0.4-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070508 Iceweasel/2.0.0.4 (Debian-2.0.0.4-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070508 Iceweasel/2.0.0.4 (Debian-2.0.0.4-0etch1) 
Iceweasel 2.0.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-2) 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; nb-NO; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-2) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0 Iceweasel/2.0.0.3 (Debian-2.0.0.13-1) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-2) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.3) Gecko/20070310 Iceweasel/2.0.0.3 (Debian-2.0.0.3-1) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a3) Gecko/20070409 IceWeasel/2.0.0.3 
Iceweasel 2.0.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070208 Iceweasel/2.0.0.2 (Debian-2.0.0.2+dfsg-3) 
Iceweasel 2.0.0.19 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.19) Gecko/20081202 Iceweasel/2.0.0.19 (Debian-2.0.0.19-0etch1) 
Iceweasel 2.0.0.18 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.18) Gecko/20081030 Iceweasel/2.0.0.18 (Debian-2.0.0.18-0etch1) 
Iceweasel 2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.17) Gecko/20080827 Iceweasel/2.0.0.17 (Debian-2.0.0.17-0etch1) 
Iceweasel 2.0.0.16 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.16) Gecko/20080702 Iceweasel/2.0.0.16 (Debian-2.0.0.16-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.16) Gecko/20080702 Iceweasel/2.0.0.16 (Debian-2.0.0.16-0etch1) 
Iceweasel 2.0.0.15 
Mozilla/5.0 (X11; U; Linux ppc; de; rv:1.8.1.15) Gecko/20080612 Iceweasel/2.0.0.15 (Debian-2.0.0.15-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.15) Gecko/20080612 Iceweasel/2.0.0.15 (Debian-2.0.0.15-0etch1) 
Iceweasel 2.0.0.14 
Mozilla/5.0 (X11; U; Linux x86_64; ru; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-2) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-2) 
Mozilla/5.0 (X11; U; Linux sparc64; en-US; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-2) 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080404 Iceweasel/2.0.0.14 (Debian-2.0.0.14-0etch1) 
Iceweasel 2.0.0.13 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.13) Gecko/20080311 Iceweasel/2.0.0.13 (Debian-2.0.0.13-1) 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.8.1.13) Gecko/20080311 Iceweasel/2.0.0.13 (Debian-2.0.0.13-0etch1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.3 Iceweasel/2.0.0.13 (Debian-2.0.0.13-1) 
Iceweasel 2.0.0.12 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.8.1.12) Gecko/20080129 Iceweasel/2.0.0.12 (Debian-2.0.0.12-1) 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.12) Gecko/20080129 Iceweasel/2.0.0.12 (Debian-2.0.0.12-1) 
Mozilla/5.0 (X11; U; Linux i686; it; rv:1.8.1.12) Gecko/20080129 Iceweasel/2.0.0.12 (Debian-2.0.0.12-0etch1) 
Iceweasel 2.0.0.11 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.8.1.11) Gecko/20071128 Iceweasel/2.0.0.11 (Debian-2.0.0.11-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.11) Gecko/20071128 Iceweasel/2.0.0.11 (Debian-2.0.0.11-1) 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.8.1.11) Gecko/20071128 Iceweasel/2.0.0.11 (Debian-2.0.0.11-1) 
Iceweasel 2.0.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-4) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-2) 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.8.1.1) Gecko/2006120502 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-2) 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-2) 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-2) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-1) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-2) 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.8.1.1) Gecko/20061205 Iceweasel/2.0.0.1 (Debian-2.0.0.1+dfsg-1) 
Iceweasel 2.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1) Gecko/20061024 Iceweasel/2.0 (Debian-2.0+dfsg-1) 
Mozilla/5.0 (X11; U; Linux x86_64; en-GB; rv:1.9.0.9) Gecko/2009050519 iceweasel/2.0 (Debian-3.0.6-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1) Gecko/20061024 Iceweasel/2.0 (Debian-2.0+dfsg-1) 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en; rv:1.8.1) Gecko/20061024 Iceweasel/2.0 (Debian-2.0+dfsg-1) 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en; rv:1.8.1) Gecko/20061024 Iceweasel/2.0 
Iceweasel 1.5.0.7-g2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.7) Gecko/20061022 Iceweasel/1.5.0.7-g2 
Iceweasel 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.8pre) Gecko/20061001 Firefox/1.5.0.8pre (Iceweasel) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.9.0.7) Gecko/2009030814 Iceweasel Firefox/3.0.7 (Debian-3.0.7-1) 
Mozilla/5.0 (Linux) Gecko Iceweasel (Debian) Mnenhy 
iNet Browser

Click on any string to get more details

iNet Browser 4.7 
Mozilla/5.0 (Future Star Technologies Corp.; Star-Blade OS; x86_64; U; en-US) iNet Browser 4.7 
iNet Browser 2.5 
Mozilla/6.0 (Future Star Technologies Corp. Star-Blade OS; U; en-US) iNet Browser 2.5 
Internet Explorer

Click on any string to get more details

Internet Explorer 8.0 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.2; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; Media Center PC 6.0; InfoPath.2; MS-RTC LM  
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 3.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; msn OptimizedIE8;ZHCN) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; MS-RTC LM  
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; Zune 4.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; OfficeLiveConnector.1.4; OfficeLivePatch.1.3; yie8) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; Zune 3.0; MS-RTC LM  
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; MS-RTC LM 8; Zune 4.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; MS-RTC LM  
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; FDM; OfficeLiveConnector.1.4; OfficeLivePatch.1.3; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E; FDM) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 4.0.20402; MS-RTC LM  
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 1.1.4322; InfoPath.2; MS-RTC LM  
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 1.1.4322; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; InfoPath.3; .NET CLR 4.0.20506) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; MRA 5.5 (build 02842); SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2)

More Internet Explorer 8.0 user agents strings –>>

Internet Explorer 7.0b 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 6.0) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.2; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 3.0.04506.30) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; Media Center PC 3.0; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; FDM; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.40607) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.0.3705; Media Center PC 3.1; Alexa Toolbar; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Internet Explorer 7.0 
Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US) 
Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; el-GR) 
Mozilla/5.0 (MSIE 7.0; Macintosh; U; SunOS; X11; gu; SV1; InfoPath.2; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648) 
Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; c .NET CLR 3.0.04506; .NET CLR 3.5.30707; InfoPath.1; el-GR) 
Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; c .NET CLR 3.0.04506; .NET CLR 3.5.30707; InfoPath.1; el-GR) 
Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; fr-FR) 
Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 6.0; en-US) 
Mozilla/5.0 (compatible; MSIE 7.0; Windows NT 5.2; WOW64; .NET CLR 2.0.50727) 
Mozilla/4.79 [en] (compatible; MSIE 7.0; Windows NT 5.0; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648) 
Mozilla/4.0 (Windows; MSIE 7.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727) 
Mozilla/4.0 (Mozilla/4.0; MSIE 7.0; Windows NT 5.1; FDM; SV1; .NET CLR 3.0.04506.30) 
Mozilla/4.0 (Mozilla/4.0; MSIE 7.0; Windows NT 5.1; FDM; SV1) 
Mozilla/4.0 (compatible;MSIE 7.0;Windows NT 6.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0;) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; YPC 3.2.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.2; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; YPC 3.2.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; Media Center PC 5.0; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.2; .NET CLR 3.5.30729; .NET CLR 3.0.30618; .NET CLR 1.1.4322)

More Internet Explorer 7.0 user agents strings –>>

Internet Explorer 6.1 
Mozilla/4.0 (compatible; MSIE 6.1; Windows XP; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.1; Windows XP) 
Internet Explorer 6.0b 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.1; DigExt) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.0; YComp 5.0.2.6) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.0; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.0; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.0) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 4.0; .NET CLR 1.0.2914) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 4.0) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows 98; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows 98; Win 9x 4.90) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows 98) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 5.0; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0b; Windows NT 4.0) 
Internet Explorer 6.01 
Mozilla/4.0 (compatible; MSIE 6.01; Windows NT 6.0) 
Internet Explorer 6.0 
Mozilla/5.0 (Windows; U; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727) 
Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727) 
Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4325) 
Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1) 
Mozilla/45.0 (compatible; MSIE 6.0; Windows NT 5.1) 
Mozilla/4.08 (compatible; MSIE 6.0; Windows NT 5.1) 
Mozilla/4.01 (compatible; MSIE 6.0; Windows NT 5.1) 
Mozilla/4.0 (X11; MSIE 6.0; i686; .NET CLR 1.1.4322; .NET CLR 2.0.50727; FDM) 
Mozilla/4.0 (Windows; MSIE 6.0; Windows NT 6.0) 
Mozilla/4.0 (Windows; MSIE 6.0; Windows NT 5.2) 
Mozilla/4.0 (Windows; MSIE 6.0; Windows NT 5.0) 
Mozilla/4.0 (Windows; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727) 
Mozilla/4.0 (MSIE 6.0; Windows NT 5.1) 
Mozilla/4.0 (MSIE 6.0; Windows NT 5.0) 
Mozilla/4.0 (compatible;MSIE 6.0;Windows 98;Q312461) 
Mozilla/4.0 (Compatible; Windows NT 5.1; MSIE 6.0) (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; U; MSIE 6.0; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 3.5.21022) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322; .NET CLR 3.5.21022; InfoPath.2)

More Internet Explorer 6.0 user agents strings –>>

Internet Explorer 6,0 
Mozilla/4.0 (compatible; MSIE 6,0; Windows NT 5,1; SV1; Alexa Toolbar) 
Internet Explorer 5.5b1 
Mozilla/4.0 (compatible; MSIE 5.5b1; Mac_PowerPC) 
Internet Explorer 5.50 
Mozilla/4.0 (compatible; MSIE 5.50; Windows NT; SiteKiosk 4.9; SiteCoach 1.0) 
Mozilla/4.0 (compatible; MSIE 5.50; Windows NT; SiteKiosk 4.8; SiteCoach 1.0) 
Mozilla/4.0 (compatible; MSIE 5.50; Windows NT; SiteKiosk 4.8) 
Mozilla/4.0 (compatible; MSIE 5.50; Windows 98; SiteKiosk 4.8) 
Mozilla/4.0 (compatible; MSIE 5.50; Windows 95; SiteKiosk 4.8) 
Mozilla/4.0 (compatible;MSIE 5.5; Windows 98) 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) 
Mozilla/4.0 (compatible; MSIE 5.5;) 
Mozilla/4.0 (Compatible; MSIE 5.5; Windows NT5.0; Q312461; SV1; .NET CLR 1.1.4322; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT5) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.5) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.2; .NET CLR 1.1.4322; InfoPath.2; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; FDM) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.2; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.1; SV1; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.1; .NET CLR 2.0.50727)

More Internet Explorer 5.5 user agents strings –>>

Internet Explorer 5.23 
Mozilla/4.0 (compatible; MSIE 5.23; Mac_PowerPC) 
Internet Explorer 5.22 
Mozilla/4.0 (compatible; MSIE 5.22; Mac_PowerPC) 
Internet Explorer 5.21 
Mozilla/4.0 (compatible; MSIE 5.21; Mac_PowerPC) 
Internet Explorer 5.2 
Mozilla/4.0 (compatible; MSIE 5.2; Mac_PowerPC) 
Mozilla/4.0 (compatible; MSIE 5.2; Mac_PowerPC) 
Internet Explorer 5.17 
Mozilla/4.0 (compatible; MSIE 5.17; Mac_PowerPC) 
Mozilla/4.0 (compatible; MSIE 5.17; Mac_PowerPC Mac OS; en) 
Internet Explorer 5.16 
Mozilla/4.0 (compatible; MSIE 5.16; Mac_PowerPC) 
Mozilla/4.0 (compatible; MSIE 5.16; Mac_PowerPC) 
Internet Explorer 5.15 
Mozilla/4.0 (compatible; MSIE 5.15; Mac_PowerPC) 
Mozilla/4.0 (compatible; MSIE 5.15; Mac_PowerPC) 
Internet Explorer 5.14 
Mozilla/4.0 (compatible; MSIE 5.14; Mac_PowerPC) 
Internet Explorer 5.13 
Mozilla/4.0 (compatible; MSIE 5.13; Mac_PowerPC) 
Internet Explorer 5.12 
Mozilla/4.0 (compatible; MSIE 5.12; Mac_PowerPC) 
Mozilla/4.0 (compatible; MSIE 5.12; Mac_PowerPC) 
Internet Explorer 5.0b1 
Mozilla/4.0 (compatible; MSIE 5.0b1; Mac_PowerPC) 
Internet Explorer 5.05 
Mozilla/4.0 (compatible; MSIE 5.05; Windows NT 4.0) 
Mozilla/4.0 (compatible; MSIE 5.05; Windows NT 3.51) 
Internet Explorer 5.01 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT; Hotbar 4.1.8.0) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT; DigExt) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; YComp 5.0.2.6; MSIECrawler) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; YComp 5.0.2.6; Hotbar 4.2.8.0) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; YComp 5.0.2.6; Hotbar 3.0) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; YComp 5.0.2.6) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; YComp 5.0.2.4) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; YComp 5.0.0.0; Hotbar 4.1.8.0) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; Wanadoo 5.6) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; Wanadoo 5.3; Wanadoo 5.5) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; Wanadoo 5.1) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; SV1; .NET CLR 1.1.4322; .NET CLR 1.0.3705; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; SV1) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; Q312461; T312461) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; Q312461) 
Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; MSIECrawler)

More Internet Explorer 5.01 user agents strings –>>

Internet Explorer 5.00 
Mozilla/4.0 (compatible; MSIE 5.00; Windows 98) 
Mozilla/4.0(compatible; MSIE 5.0; Windows 98; DigExt) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT;) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt; YComp 5.0.2.6) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt; YComp 5.0.2.5) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt; YComp 5.0.0.0) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt; Hotbar 4.1.8.0) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt; Hotbar 3.0) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 5.9; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 5.2; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 5.0) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98;) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; YComp 5.0.2.4) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; Hotbar 3.0) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt; YComp 5.0.2.6; yplus 1.0) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt; YComp 5.0.2.6) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt; YComp 5.0.2.5; YComp 5.0.0.0)

More Internet Explorer 5.0 user agents strings –>>

Internet Explorer 4.5 
Mozilla/4.0 (compatible; MSIE 4.5; Windows 98; ) 
Mozilla/4.0 (compatible; MSIE 4.5; Mac_PowerPC) 
Mozilla/4.0 (compatible; MSIE 4.5; Mac_PowerPC) 
Internet Explorer 4.01 
Mozilla/4.0 PPC (compatible; MSIE 4.01; Windows CE; PPC; 240×320; Sprint:PPC-6700; PPC; 240×320) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows NT) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows NT 5.0) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint;PPC-i830; PPC; 240×320) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint; SCH-i830; PPC; 240×320) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint:SPH-ip830w; PPC; 240×320) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint:SPH-ip320; Smartphone; 176×220) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint:SCH-i830; PPC; 240×320) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint:SCH-i320; Smartphone; 176×220) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Sprint:PPC-i830; PPC; 240×320) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176×220) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240×320; Sprint:PPC-6700; PPC; 240×320) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240×320; PPC) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows CE) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows 98; Hotbar 3.0) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows 98; DigExt) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows 98) 
Mozilla/4.0 (compatible; MSIE 4.01; Windows 95) 
Mozilla/4.0 (compatible; MSIE 4.01; Mac_PowerPC)

More Internet Explorer 4.01 user agents strings –>>

Internet Explorer 4.0 
Mozilla/4.0 WebTV/2.6 (compatible; MSIE 4.0) 
Mozilla/4.0 (compatible; MSIE 4.0; Windows NT) 
Mozilla/4.0 (compatible; MSIE 4.0; Windows 98 ) 
Mozilla/4.0 (compatible; MSIE 4.0; Windows 95; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 4.0; Windows 95) 
Mozilla/4.0 (Compatible; MSIE 4.0) 
Mozilla/2.0 (compatible; MSIE 4.0; Windows 98) 
Internet Explorer 3.0B 
Mozilla/2.0 (compatible; MSIE 3.0B; Windows NT) 
Internet Explorer 3.03 
Mozilla/2.0 (compatible; MSIE 3.03; Windows 3.1) 
Internet Explorer 3.02 
Mozilla/2.0 (compatible; MSIE 3.02; Windows 3.1) 
Internet Explorer 3.01 
Mozilla/2.0 (compatible; MSIE 3.01; Windows 95) 
Mozilla/2.0 (compatible; MSIE 3.01; Windows 95) 
Internet Explorer 3.0 
Mozilla/3.0 (compatible; MSIE 3.0; Windows NT 5.0) 
Mozilla/2.0 (compatible; MSIE 3.0; Windows 95) 
Mozilla/2.0 (compatible; MSIE 3.0; Windows 3.1) 
Internet Explorer 2.0 
Mozilla/4.0 (compatible; MSIE 2.0; Windows NT 5.0; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0) 
Mozilla/1.22 (compatible; MSIE 2.0; Windows 95) 
Mozilla/1.22 (compatible; MSIE 2.0; Windows 3.1) 
iRider 
commercial Internet Explorer shell developed by Wymea Bay

Click on any string to get more details

iRider 2.60.0008 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; iRider 2.60.0008; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0) 
iRider 2.21.1108 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; iRider 2.21.1108) 
Iron 
based on the free Sourcecode "Chromium" (the google browser) – without any problems at privacy and security

Click on any string to get more details

Iron 5.0.326.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.1 (KHTML, like Gecko) Iron/5.0.326.0 Chrome/5.0.326.0 Safari/533.1 
Iron 4.0.280.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Iron/4.0.280.0 Chrome/4.0.280.0 Safari/532.9 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Iron/4.0.280.0 Chrome/4.0.275.0 Safari/532.9 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Chrome/4.0.280.0 Safari/532.8 Iron/4.0.280.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Iron/4.0.280.0 Chrome/4.0.280.0 Safari/532.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.9 (KHTML, like Gecko) Iron/4.0.280.0 Chrome/4.0.280.0 Safari/532.9 
Iron 4.0.275.2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Iron/4.0.275.2 Chrome/4.0.275.2 Safari/532.8 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Iron/4.0.275.2 Chrome/4.0.275.2 Safari/532.8 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Iron/4.0.275.2 Chrome/4.0.275.2 Safari/532.8 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Chrome/4.0.275.2 Safari/532.8 Iron/4.0.275.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Iron/4.0.275.2 Chrome/4.0.275.2 Safari/532.8 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Iron/4.0.275.2 Chrome/4.0.275.2 Safari/532.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.8 (KHTML, like Gecko) Iron/4.0.275.2 Chrome/4.0.275.2 Safari/532.8 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-US) AppleWebKit/532.5 (KHTML, like Gecko) Iron/4.0.275.2 Chrome/4.0.275.2 Safari/532.5 
Iron 4.0.227.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Iron/4.0.227.0 Chrome/4.0.227.0 Safari/532.3 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Iron/4.0.227.0 Chrome/4.0.227.0 Safari/532 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US) AppleWebKit/532.3 (KHTML, like Gecko) Iron/4.0.227.0 Chrome/4.0.227.0 Safari/532.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Iron/4.0.227.0 Chrome/4.0.227.0 Safari/532.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Iron/4.0.227.0 Chrome/4.0.227.0 Safari/532.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.3 (KHTML, like Gecko) Iron/4.0.227.0 Chrome/4.0.227.0 Safari/532.3 
Iron 3.0.197.0 
Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Iron/3.0.197.0 Safari/532.0 
Mozilla/5.0 (Windows; U;) AppleWebKit/532.0 (KHTML, like Gecko) Iron/3.0.197.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) Chrome/0.0.0 Iron/3.0.197.0 AppleWebKit/532.0 (KHTML, like Gecko) Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Iron/3.0.197.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/0.0.0 Safari/532.0 Iron/3.0.197.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE) AppleWebKit/532.0 (KHTML, like Gecko) Iron/3.0.197.0 Safari/532.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1) AppleWebKit/532.0 (KHTML, like Gecko) Iron/3.0.197.0 Safari/532.0 
Mozilla/5.0 (U;) AppleWebKit/532.0 (KHTML, like Gecko) Iron/3.0.197.0 Safari/532.0 
Iron 3.0.189.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Iron/3.0.189.0 Safari/531.0 
Iron 2.0.178.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/530.9 (KHTML, like Gecko) Iron/2.0.178.0 Safari/530.9 
Iron 2.0.168.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.1 (KHTML, like Gecko) Iron/2.0.168.0 Safari/530.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.1 (KHTML, like Gecko) Iron/2.0.168.0 Safari/530.1 
Iron 1.0.155.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/528.7 (KHTML, like Gecko) Iron/1.0.155.0 Safari/528.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.7 (KHTML, like Gecko) Iron/1.0.155.0 Safari/528.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.7 (KHTML, like Gecko) Iron/1.0.155.0 Safari/528.7 
Iron 0.4.155.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.5 (KHTML, like Gecko) Iron/0.4.155.0 Safari/528.5 
Iron 0.3.155.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.4 (KHTML, like Gecko) Iron/0.3.155.0 Safari/19322656.528 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.4 (KHTML, like Gecko) Iron/0.3.155.0 Safari/18455624.528 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528.4 (KHTML, like Gecko) Iron/0.3.155.0 Safari/13506912.528 
Iron 0.2.152.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/41562480.525 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/14871328.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US)AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/13657880.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/28768176.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/13543896.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12733120.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12595016.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12542120.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12535056.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12475112.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12285712.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12282560.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12279816.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12272384.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12207312.525 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Iron/0.2.152.0 Safari/12079480.525 
Iron 
Mozilla/5.0 (Windows; U;) AppleWebKit/532.0 (KHTML, like Gecko) Iron 
K-Meleon 
K-Meleon is an lightweight web browser for the win32 (Windows) platform based on the Gecko layout engine. K-Meleon is free, open source software released under the GNU General Public License.

Click on any string to get more details

K-Meleon 1.5.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.8.1.24pre) Gecko/20100228 K-Meleon/1.5.4 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.24pre) Gecko/20091010 K-Meleon/1.5.4 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.24) Gecko/20100228 K-Meleon/1.5.4 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.8.1.24) Gecko/20100228 K-Meleon/1.5.4 
K-Meleon 1.5.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.7pre) Gecko K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.2; fr-FR; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.8.1.22) Gecko/20090623 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; hu-HU; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.8.1.23) Gecko/20090825 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.22) Gecko/20090623 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:1.8.1.21) Gecko/20090331 K-Meleon/1.5.3 
K-Meleon 1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-DE; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-PT; rv:1.8.1.21) Gecko/20090303 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.8.1.21) Gecko/20090403 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.8.1.21) Gecko/20090303 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.22pre) Gecko/20090502 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090403 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.19) Gecko/20081217 K-Meleon/1.5.2 
Mozilla/5.0 (Darwin; FreeBSD 5.6; en-GB; rv:1.9.1b3pre)Gecko/20081211 K-Meleon/1.5.2 
K-Meleon 1.5.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.17) Gecko/20080919 K-Meleon/1.5.1 
K-Meleon 1.5.0beta 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.5.0beta 
K-Meleon 1.5.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.5.0b2 
K-Meleon 1.5.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; es-ES; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
Mozilla/5.0 (Darwin; FreeBSD 5.6; en-GB; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.5.0 
K-Meleon 1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.8) Gecko/20071013 K-Meleon/1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-EN; rv:1.8.1.8) Gecko/20071013 K-Meleon/1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.8.1.8) Gecko/20071013 K-Meleon/1.5 
K-Meleon 1.11 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.5) Gecko/20070722 K-Meleon/1.11 
K-Meleon 1.1.6 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.1.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.1.6 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.17pre) Gecko/20080716 K-Meleon/1.1.6 
K-Meleon 1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr-FR; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; es-ES; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 (+http://www.kangaroo-personal.de) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.14) Gecko/20080406 K-Meleon/1.1.5 
K-Meleon 1.1.4 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.12) Gecko/20080203 K-Meleon/1.1.4 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de-DE; rv:1.8.1.12) Gecko/20080203 K-Meleon/1.1.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU; rv:1.8.1.12) Gecko/20080203 K-Meleon/1.1.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080203 K-Meleon/1.1.4 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.8.1.12) Gecko/20080203 K-Meleon/1.1.4 
K-Meleon 1.1.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.10) Gecko/20071116 K-Meleon/1.1.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.10) Gecko/20071116 K-Meleon/1.1.3 
Mozilla/5.0 (Windows; U; Win 9x 4.90; es-ES; rv:1.8.1.10) Gecko/20071116 K-Meleon/1.1.3 
K-Meleon 1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.6) Gecko/20070727 K-Meleon/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070727 K-Meleon/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.1.6) Gecko/20070727 K-Meleon/1.1.2 
K-Meleon 1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.8.1.4) Gecko/20070511 K-Meleon/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-AR; rv:1.8.1.4) Gecko/20070511 K-Meleon/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4) Gecko/20070511 K-Meleon/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.8.1.4) Gecko/20070511 K-Meleon/1.1 
K-Meleon 1.02 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.21) Gecko/20090403 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.2) Gecko/20070222 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ko-KR; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-AR; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.7) Gecko/20060917 K-Meleon/1.02 
K-Meleon 1.01 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.0.6) Gecko/20060730 K-Meleon/1.01 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.6) Gecko/20060730 K-Meleon/1.01 
K-Meleon 1.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de-AT; rv:1.8.0.5) Gecko/20060706 K-Meleon/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.5) Gecko/20060706 K-Meleon/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.0.1) Gecko/20060115 K-Meleon/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.0.5) Gecko/20060730 K-Meleon/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.0.5) Gecko/20060706 K-Meleon/1.0 
K-Meleon 0.9 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.2pre) Gecko/20070221 K-Meleon/0.9 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.7.12) Gecko/20050915 K-Meleon/0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041220 K-Meleon/0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.12) Gecko/20050610 K-Meleon/0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20041220 K-Meleon/0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050610 K-Meleon/0.9 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.5) Gecko/20041220 K-Meleon/0.9 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.7.5) Gecko/20041220 K-Meleon/0.9 
K-Meleon 0.8.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5) Gecko/20031016 K-Meleon/0.8.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.5) Gecko/20031016 K-Meleon/0.8.2 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.5) Gecko/20031016 K-Meleon/0.8.2 
K-Meleon 0.8 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.5) Gecko/20031016 K-Meleon/0.8 
K-Meleon 0.7 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.2b) Gecko/20021016 K-Meleon 0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2b) Gecko/20021016 K-Meleon 0.7 
K-Ninja 
Minimalistic modification of K-Meleon. K-Ninja is designed with no menu-bar and a reduced number of toolbar buttons in order to reduce the screen area used by the browser for functions other than rendering the website.

Click on any string to get more details

K-Ninja 2.1.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4pre) Gecko/20070404 K-Ninja/2.1.3 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.4pre) Gecko/20070404 K-Ninja/2.1.3 
K-Ninja 2.1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2pre) Gecko/20070215 K-Ninja/2.1.1 
K-Ninja 2.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.7) Gecko/20060917 K-Ninja/2.0.4 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.7) Gecko/20060917 K-Ninja/2.0.4 
K-Ninja 2.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.6) Gecko/20060731 K-Ninja/2.0.2 
K-Ninja 2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.5) Gecko/20060706 K-Ninja/2.0 
Kapiko 
Chinese browser from Ufox lab, uses Gecko rendering engine

Click on any string to get more details

Kapiko 3.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.0.1) Gecko/20080722 Firefox/3.0.1 Kapiko/3.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9) Gecko/20080705 Firefox/3.0 Kapiko/3.0 
Kazehakase 
Kazehakase is a web browser for UNIX compatible environment that is implemented with multiple layout engines.

Click on any string to get more details

Kazehakase 0.5.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko Kazehakase/0.5.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko Fedora/1.9.0.8-1.fc10 Kazehakase/0.5.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko Kazehakase/0.5.6 
Kazehakase 0.5.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1) Gecko Kazehakase/0.5.5 
Kazehakase 0.5.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko Kazehakase/0.5.4 Debian/0.5.4-2.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko Kazehakase/0.5.4 Debian/0.5.4-2.1ubuntu3 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.1.16) Gecko/20080816 Firefox/2.0.0.16 Kazehakase/0.5.4 
Kazehakase 0.4.9 
Mozilla/5.0 (X11; U; FreeBSD i386; rv:1.8.1.12) Gecko/0 Kazehakase/0.4.9 
Kazehakase 0.4.7 
Mozilla/5.0 (X11; Linux x86_64; U;) Gecko/20070610 Kazehakase/0.4.7 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20070610 Kazehakase/0.4.7 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20070322 Kazehakase/0.4.7 
Kazehakase 0.4.6 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20070304 Kazehakase/0.4.6 
Kazehakase 0.4.5 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20070322 Kazehakase/0.4.5 
Kazehakase 0.4.3 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/0 Kazehakase/0.4.3 Debian/0.4.3-1ubuntu1 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/0 Kazehakase/0.4.3 
Mozilla/5.0 (X11; Linux i686; U; rv:1.7) Gecko/0 Kazehakase/0.4.3 
Kazehakase 0.4.2 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20060216 Kazehakase/0.4.2 
Kazehakase 0.3.9 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20070224 Kazehakase/0.3.9 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20050923 Kazehakase/0.3.9 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/0 Kazehakase/0.3.9 
Kazehakase 0.3.8 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20060717 Kazehakase/0.3.8 Debian/0.3.8-2 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/0 Kazehakase/0.3.8 
Kazehakase 0.3.5 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/0 Kazehakase/0.3.5 
Kazehakase 0.3.3 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20051128 Kazehakase/0.3.3 Debian/0.3.3-1 
Kazehakase 0.3.1 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/0 Kazehakase/0.3.1 
Kazehakase 0.2.8 
Mozilla/5.0 (X11; Linux i686; U;) Gecko/20050923 Kazehakase/0.2.8 Debian/0.2.8-1ubuntu2 
KKman

Click on any string to get more details

KKman 3.2 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKMAN3.2; InfoPath.2; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKMAN3.2; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKMAN3.2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; KKMAN3.2; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; KKMAN3.2) 
KKman 3.0 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; (R1 1.5); KKman3.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; KKman3.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 1.1.4322; MEGAUPLOAD 2.0; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; OfficeLiveConnector.1.3; OfficeLivePatch.0.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.30618; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; InfoPath.2; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; GTB6; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322; .NET CLR 3.5.21022; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; GTB5; KKman3.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; GTB5; KKman3.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; KKman3.0; InfoPath.2; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; KKman3.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; KKman3.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKman3.0; InfoPath.1; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKman3.0; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKman3.0; .NET CLR 1.1.4322; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKman3.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; GTB6; KKman3.0; .NET CLR 1.1.4322)

More KKman 3.0 user agents strings –>>

KKman 2.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; KKman2.0; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.0; KKman2.0) 
KKman 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; KKman3.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022) 
KMLite 
KMLite is the successor of K-Ninja browser, based on K-Meleon

Click on any string to get more details

KMLite 1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081217 KMLite/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.19) Gecko/20081217 KMLite/1.1.2 
Konqueror

Click on any string to get more details

Konqueror 4.4 
Mozilla/5.0 (compatible; Konqueror/4.4; Linux) KHTML/4.4.1 (like Gecko) Fedora/4.4.1-1.fc12 
Konqueror 4.3 
Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.1 (like Gecko) Fedora/4.3.1-3.fc11 
Mozilla/5.0 (compatible; Konqueror/4.3; Linux 2.6.31-16-generic; X11) KHTML/4.3.2 (like Gecko) 
Konqueror 4.2 
Mozilla/5.0 (compatible; Konqueror/4.2; Linux; X11; x86_64) KHTML/4.2.4 (like Gecko) Fedora/4.2.4-2.fc11 
Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.98 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.96 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.4 (like Gecko) Slackware/13.0 
Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.4 (like Gecko) Fedora/4.2.4-2.fc11 
Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.1 (like Gecko) Fedora/4.2.1-4.fc11 
Mozilla/5.0 (compatible; Konqueror/4.2) KHTML/4.2.4 (like Gecko) Fedora/4.2.4-2.fc11 
Konqueror 4.1 
Mozilla/5.0 (compatible; Konqueror/4.1; OpenBSD) KHTML/4.1.4 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.1; Linux) KHTML/4.1.4 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.1; Linux) KHTML/4.1.3 (like Gecko) Fedora/4.1.3-3.fc10 
Mozilla/5.0 (compatible; Konqueror/4.1; Linux 2.6.27.7-134.fc10.x86_64; X11; x86_64) KHTML/4.1.3 (like Gecko) Fedora/4.1.3-4.fc10 
Mozilla/5.0 (compatible; Konqueror/4.1; DragonFly) KHTML/4.1.4 (like Gecko) 
Konqueror 4.0 
Mozilla/5.0 (compatible; Konqueror/4.0; X11) KHTML/4.0.3 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.0; Windows) KHTML/4.0.83 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.0; Linux; x86_64) KHTML/4.0.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/4.0; Linux) KHTML/4.0.82 (like Gecko) 
Konqueror 3.5 
Mozilla/5.0 (compatible; Konqueror/3.5; Windows NT 6.0) KHTML/3.5.6 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; SunOS) KHTML/3.5.1 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; SunOS) KHTML/3.5.0 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; SunOS) 
Mozilla/5.0 (compatible; Konqueror/3.5; NetBSD 4.0_RC3; X11) KHTML/3.5.7 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; NetBSD 3.0; X11) KHTML/3.5.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; x86_64; en_US) KHTML/3.5.10 (like Gecko) SUSE 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; x86_64) KHTML/3.5.5 (like Gecko) (Debian) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; x86_64) KHTML/3.5.5 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; X11; i686; en_US) KHTML/3.5.6 (like Gecko) (Debian) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; X11) KHTML/3.5.3 (like Gecko) Kubuntu 6.06 Dapper 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; i686; U; it-IT) KHTML/3.5.5 (like Gecko) (Debian) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; en_US) KHTML/3.5.6 (like Gecko) (Kubuntu) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux; de) KHTML/3.5.5 (like Gecko) (Debian) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.9 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.7 (like Gecko) SUSE 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.7 (like Gecko) (Kubuntu) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.7 (like Gecko) (Debian) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.7 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.6 (like Gecko) (Kubuntu)

More Konqueror 3.5 user agents strings –>>

Konqueror 3.4 
Mozilla/5.0 (compatible; Konqueror/3.4; SunOS) KHTML/3.4.1 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux; de, en_US) KHTML/3.4.2 (like Gecko) (Debian package 4:3.4.2-4) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.3 (like Gecko) (Kubuntu package 4:3.4.3-0ubuntu2) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.3 (like Gecko) (Kubuntu package 4:3.4.3-0ubuntu1) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.3 (like Gecko) (Debian package 4:3.4.3-2) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.3 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.2 (like Gecko) (Debian package 4:3.4.2-4) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.1 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.0 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux 2.6.12; X11) KHTML/3.4.1 (like Gecko) (Debian package 4:3.4.1-1) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux 2.6.12.6; X11; i686; en_US) KHTML/3.4.3 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux 2.6.11; X11) KHTML/3.4.0 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4; Linux 2.6.11; X11) 
Mozilla/5.0 (compatible; Konqueror/3.4) KHTML/3.4.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.4) KHTML/3.4.0 (like Gecko) 
Konqueror 3.3 
Mozilla/5.0 (compatible; Konqueror/3.3; SunOS) (KHTML, like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux) (KHTML, like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.6.9-1.667) (KHTML, like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.6.11; X11; i686; de) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.6.11; X11; i686) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.6.11; X11) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.6.11.12-whnetz-xenU; X11; i686; en_US) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.6.11) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.4.27; X11) (KHTML, like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.4.22-xfs; X11) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3) KHTML/3.3.2 (like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.3) (KHTML, like Gecko) 
Konqueror 3.2 
Mozilla/5.0 (compatible; Konqueror/3.2; Linux; X11; en_US) (KHTML, like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.2; Linux) (KHTML, like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.2; Linux 2.6.2) (KHTML, like Gecko) 
Mozilla/5.0 (compatible; Konqueror/3.2; FreeBSD) (KHTML, like Gecko) 
Konqueror 3.1-rc6 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021224) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021219) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021203) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021124) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021119) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021113) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021105) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021019) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021006) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20021002) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020915) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020907) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020905) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020828) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020822) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020815) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020626) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020624) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020614) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc6; i686 Linux; 20020607)

More Konqueror 3.1-rc6 user agents strings –>>

Konqueror 3.1-rc5 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20021224) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20021219) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20021212) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20021127) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20021112) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20021001) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020927) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020913) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020910) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020906) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020823) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020819) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020809) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020712) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020625) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020621) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020615) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020606) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020601) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc5; i686 Linux; 20020524)

More Konqueror 3.1-rc5 user agents strings –>>

Konqueror 3.1-rc4 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20021217) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20021208) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20021204) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20021124) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20021114) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20021026) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020928) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020913) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020912) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020901) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020827) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020824) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020811) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020808) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020718) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020714) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020602) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020521) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020511) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc4; i686 Linux; 20020420)

More Konqueror 3.1-rc4 user agents strings –>>

Konqueror 3.1-rc3 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20021223) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20021210) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20021204) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20021125) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20021110) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20021025) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20021004) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020926) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020915) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020912) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020818) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020725) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020716) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020709) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020607) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020520) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020515) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020510) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020426) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc3; i686 Linux; 20020421)

More Konqueror 3.1-rc3 user agents strings –>>

Konqueror 3.1-rc2 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20021221) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20021128) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20021119) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20021020) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20021014) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20021011) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020925) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020917) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020905) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020820) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020818) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020809) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020808) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020721) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020619) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020614) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020612) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020605) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020513) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc2; i686 Linux; 20020509)

More Konqueror 3.1-rc2 user agents strings –>>

Konqueror 3.1-rc1 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20021226) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20021221) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20021120) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20021113) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20021022) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20021008) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020919) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020823) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020816) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020723) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020722) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020718) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020711) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020703) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020620) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020618) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020608) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020520) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020515) 
Mozilla/5.0 (compatible; Konqueror/3.1-rc1; i686 Linux; 20020510)

More Konqueror 3.1-rc1 user agents strings –>>

Konqueror 3.1 
Mozilla/5.0 (compatible; Konqueror/3.1; Linux; X11; i686) 
Mozilla/5.0 (compatible; Konqueror/3.1; Linux; en) 
Mozilla/5.0 (compatible; Konqueror/3.1; Linux) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021128) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021113) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021106) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021105) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021103) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021102) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021027) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021007) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021006) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20021001) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20020928) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20020913) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20020817) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20020811) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20020810) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20020720) 
Mozilla/5.0 (compatible; Konqueror/3.1; i686 Linux; 20020712)

More Konqueror 3.1 user agents strings –>>

Konqueror 3.0.0-10 
Mozilla/5.0 (compatible; Konqueror/3.0.0-10; Linux) 
Mozilla/5.0 (compatible; Konqueror/3.0.0-10; Linux) 
Konqueror 3.0.0 
Mozilla/5.0 (compatible; Konqueror/3.0.0; Linux) 
Mozilla/5.0 (compatible; Konqueror/3.0.0; Linux) 
Konqueror 3.0-rc6 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20021127) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20021115) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20021106) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20021027) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20021012) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020923) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020918) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020912) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020908) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020827) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020817) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020723) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020718) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020624) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020614) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020613) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020522) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020520) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020512) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020312)

More Konqueror 3.0-rc6 user agents strings –>>

Konqueror 3.0-rc5 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021226) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021213) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021210) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021208) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021121) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021120) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021109) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021105) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021026) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021020) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20021015) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020921) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020913) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020910) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020901) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020822) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020821) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020724) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020703) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc5; i686 Linux; 20020628)

More Konqueror 3.0-rc5 user agents strings –>>

Konqueror 3.0-rc4 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20021117) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20021028) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20021016) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20021004) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020926) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020923) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020920) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020915) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020821) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020818) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020802) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020721) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020707) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020628) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020622) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020609) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020519) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020517) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020504) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc4; i686 Linux; 20020420)

More Konqueror 3.0-rc4 user agents strings –>>

Konqueror 3.0-rc3 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20021125) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20021123) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20021025) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20021018) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20021013) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020914) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020910) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020818) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020812) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020724) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020703) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020626) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020624) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020608) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020605) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020519) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020517) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020506) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020426) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc3; i686 Linux; 20020412)

More Konqueror 3.0-rc3 user agents strings –>>

Konqueror 3.0-rc2 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20021221) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20021127) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20021118) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20021008) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020809) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020702) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020606) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020602) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020505) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020424) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020323) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020226) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020219) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020213) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020110) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020108) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020107) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020106) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc2; i686 Linux; 20020105) 
Konqueror 3.0-rc1 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20021208) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20021206) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20021118) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20021103) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20021026) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020917) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020911) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020906) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020808) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020807) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020801) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020726) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020723) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020705) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020704) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020703) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020523) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020515) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020319) 
Mozilla/5.0 (compatible; Konqueror/3.0-rc1; i686 Linux; 20020217)

More Konqueror 3.0-rc1 user agents strings –>>

Konqueror 3.0 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20021219) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20021117) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20021107) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20021012) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20021006) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020927) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020914) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020825) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020823) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020817) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020809) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020728) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020716) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020707) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020608) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020603) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020511) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020510) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020502) 
Mozilla/5.0 (compatible; Konqueror/3.0; i686 Linux; 20020423)

More Konqueror 3.0 user agents strings –>>

Konqueror 2.2.2-3 
Mozilla/5.0 (compatible; Konqueror/2.2.2-3; Linux) 
Konqueror 2.2.2 
Mozilla/5.0 (compatible; Konqueror/2.2.2; Linux) 
Mozilla/5.0 (compatible; Konqueror/2.2.2; Linux 2.4.14-xfs; X11; i686) 
Mozilla/5.0 (compatible; Konqueror/2.2.2) 
Mozilla/5.0 (compatible; Konqueror/2.2.2; Linux) 
Konqueror 2.2.1 
Mozilla/5.0 (compatible; Konqueror/2.2.1; Linux) 
Mozilla/5.0 (compatible; Konqueror/2.2.1; Linux) 
Konqueror 2.2-12 
Mozilla/5.0 (compatible; Konqueror/2.2-12; Linux) 
Konqueror 2.2-11 
Mozilla/5.0 (compatible; Konqueror/2.2-11; Linux) 
Mozilla/5.0 (compatible; Konqueror/2.2-11; Linux) 
Konqueror 2.1.2 
Mozilla/5.0 (compatible; Konqueror/2.1.2; X11) 
Konqueror 2.1.1 
Mozilla/5.0 (compatible; Konqueror/2.1.1; X11) 
LeechCraft 
LeechCraft is an extensible crossplatform internet-client. It’s purely plugin-based and is designed so that plugins can be easily combined and changed without affecting other plugins. Web browsing abilities are implemented via the Poshuku plugin.

Click on any string to get more details

LeechCraft 0.3.55 
LeechCraft (X11; U; Linux; ru_RU) (LeechCraft/Poshuku 0.3.55-393-g97b9bb2; WebKit 4.5.2/4.5.2) 
LeechCraft (X11; U; Linux; ru_RU) (LeechCraft/Poshuku 0.3.55-383-g7446455; WebKit 4.5.2/4.5.2) 
LeechCraft (X11; U; Linux; ru_RU) (LeechCraft/Poshuku 0.3.55-381-g3919184; WebKit 4.5.2/4.5.2) 
LeechCraft (X11; U; Linux; ru_RU) (LeechCraft/Poshuku 0.3.55-330-g3821e8c; WebKit 4.5.2/4.5.2) 
LeechCraft (X11; U; Linux; ru_RU) (LeechCraft/Poshuku 0.3.55-324-g9365f23; WebKit 4.5.2/4.5.2) 
Links 
Text mode browser for unix and OS/2

Click on any string to get more details

Links 6.9 
Links (6.9; Unix 6.9-astral sparc; 80×25) 
Links 2.xpre7 
Links (2.xpre7; Linux 2.4.18 i586; x) 
Links 2.2 
Links (2.2; NetBSD 5.0 i386; 80×25) 
Links (2.2; Linux 2.6.32-gentoo-r6 x86_64; 129×42) 
Links (2.2; Linux 2.6.32-fw3 i686; 143×53) 
Links (2.2; Linux 2.6.30-ARCH x86_64; 160×50) 
Links (2.2; Linux 2.6.28-gentoo-r5 i686; x) 
Links (2.2; Linux 2.6.28-14-generic i686; 80×24) 
Links (2.2; Linux 2.6.28-11-server i686; 80×24) 
Links (2.2; Linux 2.6.27-hardened-r7 x86_64; x) 
Links (2.2; Linux 2.6.25-gentoo-r9 sparc64; 166×52) 
Links (2.2; Linux 2.6.24.4-desktop586-3mnb i686; x) 
Links (2.2; Linux 2.6.24.4-desktop586-3mnb i686; 141×19) 
Links 2.1pre9 
Links (2.1pre9; Linux 2.4.32 i686; x) 
Links 2.1pre37 
Links (2.1pre37; Linux 2.6.26.3-grsec-pjwstk-02 x86_64; 80×24) 
Links (2.1pre37; Linux 2.6.26-2-686 i686; 182×78) 
Links (2.1pre37; Linux 2.6.26-1-686 i686; x) 
Links 2.1pre33 
Links (2.1pre33; Linux 2.6.24-gentoo-r3 i686; 80×28) 
Links (2.1pre33; Linux 2.6.24-1-686 i686; 80×23) 
Links (2.1pre33; Darwin 8.11.0 Power Macintosh; x) 
Links (2.1pre33; Darwin 8.11.0 Power Macintosh; 170×55) 
Links (2.1pre33; Darwin 8.11.0 Power Macintosh; 169×55) 
Links 2.1pre32 
Links (2.1pre32; Linux 2.6.24-24-generic i686; x) 
Links 2.1pre31 
Links (2.1pre31; Linux 2.6.24.2 i686; x) 
Links (2.1pre31; Linux 2.6.23.12 i686; 134×36) 
Links 2.1pre30 
Links (2.1pre30; Linux 2.6.18-ck1-dyne i686; x) 
Links 2.1pre28 
Links (2.1pre28; Linux 2.6.24.5 i686; 80×25) 
Links (2.1pre28; Linux 2.6.23-gentoo-r3 i686; x) 
Links (2.1pre28; Linux 2.6.22-14-generic i686; x) 
Links (2.1pre28; Linux 2.6.22-14-generic i686; 50×68) 
Links 2.1pre26 
Links (2.1pre26; Linux 2.6.18-5-686 i686; x) 
Links (2.1pre26; Linux 2.6.14-hsc0ds armv5l; 236×57) 
Links 2.1pre23 
Links (2.1pre23; Linux 2.6.24.7-1.5 i686; 209×49) 
Links (2.1pre23; Linux 2.6.18-no2 i686; 80×23) 
Links (2.1pre23; Linux 2.6.17.13 i686; 80×25) 
Links 2.1pre20 
Links (2.1pre20; Linux 2.6.16-gentoo-r12 i686; 125×50) 
Links 2.1pre19 
Links (2.1pre19; Linux 2.6.15-gentoo-r1 x86_64; 80×24) 
Links 2.1pre18 
Links (2.1pre18; Linux 2.6.17-gentoo-r8 i686; 80×24) 
Links (2.1pre18; Linux 2.4.31 i686; 100×37) 
Links 2.1pre17 
Links (2.1pre17; Linux 2.6.12.2 i686; x) 
Links 2.1pre16 
Links (2.1pre16; Linux 2.6.8-3-k7 i686; 123×36) 
Links (2.1pre16; Linux 2.6.11.12-intel-domainu i686; 80×24) 
Links 2.1pre15 
Links (2.1pre15; Linux 2.6.9-19 i686; x) 
Links (2.1pre15; Linux 2.6.9-19 i686; 80×24) 
Links (2.1pre15; Linux 2.6.14.4 i686; 128×48) 
Links (2.1pre15; Linux 2.4.29 i586; 80×25) 
Links (2.1pre15; Linux 2.4.26 i686; 158×61) 
Links (2.1pre15; FreeBSD 5.3-RELEASE i386; 196×84) 
Links 2.1pre11 
Links (2.1pre11; Linux 2.6.5-gentoo i686; 122×40) 
Links 2.1pre 
Links (2.1pre; Linux) 
Links 2.1 
Links (2.1; Linux 2.6.18-gentoo-r6 x86_64; 80×24) 
Links 2.0 
Links 2.0 (http://gossamer-threads.com/scripts/links/) 
Links (2.0; FreeBSD 4.7-STABLE i386; 114×45) 
Links 1.00pre3 
Links (1.00pre3; SunOS 5.9 i86pc; 80×24) 
Links 1.00pre20 
Links (1.00pre20; Linux 2.6.23.1-rt4 i686; 155×56) (Debian pkg 1.00~pre20-0.1) 
Links (1.00pre20; Linux 2.6.22-2-686 i686; 80×24) (Debian pkg 1.00~pre20-0.1) 
Links 1.00pre12 
Links (1.00pre12; Linux 2.6.8-3-k7 i686; 123×36) (Debian pkg 0.99+1.00pre12-1) 
Links 0.98 
Links (0.98; Unix) 
Links (0.98; Darwin 6.6 Power Macintosh) 
Links (0.98; Darwin 6.0 Power Macintosh) 
Links (0.98; Darwin 6.0 Power Macintosh) 
Links 0.96 
Links (0.96; Linux 2.4.20-18.7 i586) 
Lobo 
Lobo is an open source web browser that is written completely in Java.

Click on any string to get more details

Lobo 0.98.4 
Mozilla/4.0 (compatible; MSIE 6.0; Windows XP 5.1) Lobo/0.98.4 
Lobo 0.98.3 
Mozilla/4.0 (compatible; MSIE 6.0; Linux 2.6.26-1-amd64) Lobo/0.98.3 
Lobo 0.98.2 
Mozilla/4.0 (compatible; MSIE 6.0; U; Windows;) Lobo/0.98.2 
Lobo 0.98 
Mozilla/4.0 (compatible; MSIE 6.0; U; Windows;) Lobo/0.98 
Lobo 0.97.5 
Mozilla/4.0 (compatible; MSIE 6.0; U; Windows;) Lobo/0.97.5 
Lobo 0.97.1 
Mozilla/4.0 (compatible; MSIE 6.0; U; Windows;) Lobo/0.97.1 
lolifox

Click on any string to get more details

lolifox 0.32 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070225 lolifox/0.32 
lolifox 0.3.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.8pre) Gecko/20071012 lolifox/0.3.6 Firefox/2.0.0.7 compatible 
lolifox 0.3.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070224 lolifox/0.3.2 MEGAUPLOAD 1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070224 lolifox/0.3.2 
lolifox 0.3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1) Gecko/20061127 lolifox/0.3.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1) Gecko/20061127 lolifox/0.3.0 
lolifox 0.2.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1b1) Gecko/20060713 lolifox/0.2.4 
Lorentz 
Firefox "Lorentz", a short-cycle release off the Gecko 1.9.2 branch to deliver out of process plugins and improved updater

Click on any string to get more details

Lorentz 3.6.3plugin2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3pre) Gecko/20100403 Lorentz/3.6.3plugin2pre (.NET CLR 4.0.20506) 
Lunascape 
Lunascape is a web browser that has integrated the three main browser rendering engines with the ability to switch to the optimal engine automatically

Click on any string to get more details

Lunascape 6.1.0.20995 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.8) Gecko/20100223 Firefox/3.5.8 Lunascape/6.1.0.20995 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs-CZ) AppleWebKit/533.3 (KHTML, like Gecko) Lunascape/6.1.0.20995 Safari/533.3 
Lunascape 6.0.1.20094 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Lunascape 6.0.1.20094) 
Lunascape 5.1.5.19059 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9.1.3) Gecko/20090804 Firefox/3.5.3 Lunascape/5.1.5.19059 
Lunascape 5.1.4.5 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; OfficeLiveConnector.1.3; OfficeLivePatch.1.3; Lunascape 5.1.4.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; GTB6; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1; Lunascape 5.1.4.5) 
Lunascape 5.1.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; MathPlayer 2.10b; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Lunascape 
Lunascape 5.1.3.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.1) Gecko/20090721 Firefox/3.5.1 Lunascape/5.1.3.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.2; .NET CLR 3.5.30729; .NET CLR 3.0.30618; Lunascape 5.1.3.4) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; GTB6; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; OfficeLiveConnector.1.4; OfficeLivePatch.1.3; .NET CLR 3.0.30729; Lunascape 5.1.3.4) 
Lunascape 5.1.2.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1) Gecko/20090701 Firefox/3.5 Lunascape/5.1.2.3 
Mozilla/5.0 (Windows; U; ; cs-CZ) AppleWebKit/532+ (KHTML, like Gecko, Safari/532.0) Lunascape/5.1.2.3 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; GTB6; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; InfoPath.1; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Lunascape 5.1.2.3) 
Lunascape 5.1.2.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.2.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.2.0 
Mozilla/5.0 (Windows; U; ; cs-CZ) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.2.0 
Lunascape 5.1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja; rv:1.9.1) Gecko/20090701 Firefox/3.5 Lunascape/5.1.1.2 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; GTB6; SLCC1; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 1.1.4322; .NET CLR 3.5.21022; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Lunascape 5.1.1.2) 
Lunascape 5.1.1.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1) Gecko/20090701 Firefox/3.5 Lunascape/5.1.1.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs-CZ) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.1.0 
Mozilla/5.0 (Windows; U; ; cs-CZ) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.1.0 
Lunascape 5.1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1pre) Gecko/20090516 Firefox/3.5pre Lunascape/5.1.0.1 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; Lunascape 5.1.0.1) 
Lunascape 5.1.0.0 
Mozilla/5.0 (Windows; U; ; cs-CZ) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.1.0.0 
Lunascape 5.0.5.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b4pre) Gecko/20090312 Firefox/3.1b4pre Lunascape/5.0.5.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; Trident/4.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET CLR 3.0.30729; Lunascape 5.0.5.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; GTB5; SLCC1; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Lunascape 5.0.5.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; Lunascape 5.0.5.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; OfficeLiveConnector.1.3; OfficeLivePatch.1.3; Lunascape 5.0.5.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; Lunascape 5.0.5.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; GTB6; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; Lunascape 5.0.5.0) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; Lunascape 5.0.5.0) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; Lunascape 5.0.5.0) 
Lunascape 5.0.4.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; GTB6; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET CLR 3.0.30729; Lunascape 5.0.4.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Lunascape 5.0.4.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 3.0.4506.2152; .NET CLR 2.0.50727; Lunascape 5.0.4.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Lunascape 5.0.4.0) 
Lunascape 5.0.3.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.0.3.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b4pre) Gecko/20090312 Firefox/3.1b4pre Lunascape/5.0.3.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Lunascape 5.0.3.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; Lunascape 5.0.3.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Lunascape 5.0.3.0) 
Lunascape 5.0.2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/528+ (KHTML, like Gecko, Safari/528.0) Lunascape/5.0.2.0 
Lunascape 5.0 alpha3 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; Lunascape 5.0 alpha3) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; Lunascape 5.0 alpha3) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Lunascape 5.0 alpha3) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Lunascape 5.0 alpha3) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; Lunascape 5.0 alpha3) 
Lunascape 5.0 alpha1 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 2.0.50727; Lunascape 5.0 alpha1) 
Lunascape 4.9.9.99 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja-JP) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.99 
Lunascape 4.9.9.98 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Lunascape 4.9.9.98) 
Lunascape 4.9.9.97 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Lunascape 4.9.9.97) 
Lunascape 4.9.9.96 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.96 
Mozilla/5.0 (Windows; U; Windows NT 5.0; ja-JP) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.96 
Lunascape 4.9.9.94 
Mozilla/5.0 (Windows; N; Windows NT 5.2; ru-RU) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.94 
Mozilla/5.0 (Windows; N; Windows NT 5.1; id-ID) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.94 
Mozilla/5.0 (Windows; N; Windows NT 5.1; hu-HU) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.94 
Mozilla/5.0 (Windows; N; Windows NT 5.1; en-US) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.94 
Lunascape 4.9.9.100 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/529 (KHTML, like Gecko, Safari/529.0) Lunascape/4.9.9.100 
Lunascape 4.8.1 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; Lunascape 4.8.1) 
Lunascape 4.7.2 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; Lunascape 4.7.2) 
Lunascape 4.0.1 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Lunascape 4.0.1) 
Lunascape 3.0.4 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; Lunascape 3.0.4) 
Lunascape 2.1.3 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 1.1.4322; Lunascape 2.1.3) 
Lynx 
Multiplatform text browser, initially developed in 1992 at the University of Kansas

Click on any string to get more details

Lynx textmode 
Lynx (textmode) 
Lynx 6.6.6dev.8 
Lynxy/6.6.6dev.8 libwww-FM/3.14159FM 
Lynx 2.8.7dev.9 
Lynx/2.8.7dev.9 libwww-FM/2.14 
Lynx 2.8.7dev.4 
Lynx/2.8.7dev.4 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8d 
Lynx 2.8.6rel.5 
Lynx/2.8.6rel.5 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8g 
Lynx/2.8.6rel.5 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8b 
Lynx/2.8.6rel.5 libwww-FM/2.14 
Lynx 2.8.6rel.4 
Lynx/2.8.6rel.4 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8k 
Lynx/2.8.6rel.4 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8g 
Lynx/2.8.6rel.4 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8d 
Lynx/2.8.6rel.4 libwww-FM/2.14 SSL-MM/1.4.1 GNUTLS/1.6.3 
Lynx/2.8.6rel.4 libwww-FM/2.14 
Lynx 2.8.6dev.11 
Lynx/2.8.6dev.11 libwww-FM/2.14 
Lynx 2.8.5rel.5 
Lynx/2.8.5rel.5 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8e 
Lynx/2.8.5rel.5 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8d 
Lynx 2.8.5rel.4 
Lynx/2.8.5rel.4 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8h 
Lynx 2.8.5rel.2 
Lynx/2.8.5rel.2 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7d 
Lynx/2.8.5rel.2 libwww-FM/2.14 
Lynx 2.8.5rel.1 
Lynx/2.8.5rel.1 libwww-FM/2.14FM 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8b 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.8a 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7m 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7l 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7d 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 GNUTLS/1.4.4 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 GNUTLS/1.0.16 
Lynx/2.8.5rel.1 libwww-FM/2.14 SSL-MM/1.4.1 GNUTLS/0.8.12 
Lynx/2.8.5rel.1 libwww-FM/2.14 
Lynx 2.8.5dev.3 
Lynx/2.8.5dev.3 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.6a 
Lynx 2.8.5dev.2 
Lynx/2.8.5dev.2 libwww-FM/2.14 
Lynx 2.8.5dev.16 
Lynx/2.8.5dev.16 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7a 
Lynx/2.8.5dev.16 
Lynx 2.8.4rel.1 
Lynx/2.8.4rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7c 
Lynx/2.8.4rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.7a 
Lynx/2.8.4rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.6c human-guided@mapfeatures.net 
Lynx/2.8.4rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.6b 
Lynx/2.8.4rel.1 libwww-FM/2.14 
Lynx/2.8.4rel.1 
Lynx 2.8.4dev.7 
Lynx/2.8.4dev.7 libwww-FM/2.14 
Lynx 2.8.3rel.1 
Lynx/2.8.3rel.1 libwww-FM/2.14FM 
Lynx/2.8.3rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.5a 
Lynx 2.8.3dev.8 
Lynx/2.8.3dev.8 libwww-FM/2.14FM 
Lynx 2.8.3dev.6 
Lynx/2.8.3dev.6 libwww-FM/2.14 
Lynx 2.8.1pre.9 
Lynx/2.8.1pre.9 libwww-FM/2.14 
Madfox 
Web browser based on Mozilla Firefox, developed by a Chinese developer Robin Lu (nicknamed as "splyb"). The project was an experimental project trying to enhance non-standard compatibility with Internet Explorer. As of October 12, 2005 the project stopped

Click on any string to get more details

Madfox 3.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.7.12) Gecko/20050928 Firefox/1.0.7 Madfox/3.0 
Madfox 0.3.2u3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.7.12) Gecko/20051001 Firefox/1.0.7 Madfox/0.3.2u3 
Madfox 0.3.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.7) Gecko/20050503 Firefox/1.0.3 Madfox/0.3.2 
Maxthon

Click on any string to get more details

Maxthon 3.0.8.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.1 (KHTML, like Gecko) Maxthon/3.0.8.2 Safari/533.1 
Maxthon 3.0.6.27 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.4 (KHTML, like Gecko) Maxthon/3.0.6.27 Safari/532.4 
Maxthon 2.0 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; chromeframe; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.2; Trident/4.0; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.1.4322; .NET CLR 2.0.50727; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Maxthon 2; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 1.0.3705; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; InfoPath.1; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.9; Windows NT 6.0; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; InfoPath.2; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Tablet PC 2.0; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 4.0.20506; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; FDM; .NET CLR 3.5.21022; .NET CLR 3.5.30729; .NET CLR 3.0.30618; InfoPath.2; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.21022; .NET CLR 3.5.30729; InfoPath.2; .NET CLR 3.0.30729; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 1.1.4322; .NET CLR 3.5.21022; .NET CLR 3.0.30618; .NET CLR 3.5.30729; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.2; WWTClient2; .NET CLR 3.5.30729; .NET CLR 3.0.30618; MAXTHON 2.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 3.5.21022; MAXTHON 2.0)

More Maxthon 2.0 user agents strings –>>

Maxthon 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Maxthon; Win64; x64; Trident/4.0) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Maxthon) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; Maxthon; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 1.1.4322; .NET CLR 3.5.21022; .NET CLR 3.0.30618; .NET CLR 3.5.30729; OfficeLiveConnector.1.3; OfficeLivePatch.0.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; Maxthon; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Maxthon; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Maxthon; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.21022; .NET CLR 3.5.30729; .NET CLR 3.0.30618) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Maxthon; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; Maxthon; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; Maxthon; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 3.5.30729; FDM) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 2.0.50727; InfoPath.2; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Maxthon; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; InfoPath.1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)

More Maxthon user agents strings –>>

Midori

Click on any string to get more details

Midori 1.19 
Mozilla/5.0 (X11; U; Linux i686; fr-fr) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori/1.19 
Midori 0.2.2 
Midori/0.2.2 (X11; Linux i686; U; fr-ca) WebKit/531.2+ 
Midori 0.2.0 
Mozilla/5.0 (X11; U; Linux i686; pt-br; rv:1.8.1) Gecko/20061010 Firefox/2.0 Midori/0.2.0 
Mozilla/5.0 (iPhone; U; Linux i686; pt-br) AppleWebKit/532+ (KHTML, like Gecko) Version/3.0 Mobile/1A538b Safari/419.3 Midori/0.2.0 
Midori/0.2.0 (X11; Linux i686; U; pt-br) WebKit/531.2+ 
Midori/0.2.0 (X11; Linux i686; U; de-de) WebKit/531.2+ 
Midori 0.2 
Midori/0.2 (X11; FreeBSD; U; en-us) WebKit/531.2+ 
Midori 0.1.9 
Midori/0.1.9 (X11; Linux i686; U; fr-fr) WebKit/532+ 
Midori/0.1.9 (X11; FreeBSD i386; U; en-us) WebKit/532+ 
Midori 0.1.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-us) AppleWebKit/532+ (KHTML, like Gecko) Safari/419.3 Midori/0.1.8 
Midori/0.1.8 (X11; Linux x86_64; U; es-es) WebKit/532+ 
Midori/0.1.8 (X11; Linux x86_64; U; en-us) WebKit/532+ 
Midori/0.1.8 (X11; Linux i686; U; fr-ca) WebKit/532+ 
Midori/0.1.8 (X11; Arch Linux x86_64; U; en-us) WebKit/532+ 
Midori/0.1.8 (Windows; Windows; U; it-it) WebKit/532+ 
Midori/0.1.8 (Windows; Windows; U; fr-fr) WebKit/532+ 
Midori/0.1.8 (Windows; Windows; U; fi-fi) WebKit/532+ 
Midori/0.1.8 (Windows; Windows; U; en-us) WebKit/532+ 
Midori 0.1.7 
Mozilla/5.0 (X11; U; Linux; fr-fr) AppleWebKit/532+ (KHTML, like Gecko) Safari/419.3 Midori/0.1.7 
Midori/0.1.7 (X11; Linux; U; en-us) WebKit/532+ 
Midori/0.1.7 (X11; Linux; U; de-de) WebKit/532+ 
Midori/0.1.7 (X11; Linux x86_64; U; en-us) WebKit/532+ 
Midori 0.1.6 
Mozilla/5.0 (X11; U; Linux; it-IT; rv:1.9.1) Gecko/20080913 Firefox/2.0 Midori/0.1.6 
Mozilla/5.0 (X11; U; Linux; en-us; rv:1.8.1) Gecko/20061010 Firefox/2.0 Midori/0.1.6 
Midori/0.1.6 (X11; Linux; U; pl-pl) WebKit/532+ 
Midori/0.1.6 (X11; Linux; U; en-us) WebKit/532+ 
Midori/0.1.6 (X11; Linux; U; en-gb) WebKit/532+ 
Midori/0.1.6 (X11; Linux; U; de-de) WebKit/532+ 
Midori 0.1.5 
Midori/0.1.5 (X11; Linux; U; it-it) WebKit/532+ 
Midori 0.1.4 
Midori/0.1.4 (X11; Linux; U; en-us) WebKit/532+ 
Midori 0.1.20 
Midori/0.1.20 (X11; Linux i686; U; fr-fr) WebKit/532.1+ 
Midori 0.1.10 
Midori/0.1.10 (X11; Linux i686; U; fr-fr) WebKit/532.1+ 
Midori 0.1.1 
Midori/0.1.1 (X11; Linux; U; de-de) WebKit/532+ 
Midori/0.1.1 (X11; Linux i686; U; de) WebKit/532+ 
Midori 0.1 
Mozilla/5.0 (X11; U; Linux i686; de) AppleWebKit/523+ midori/0.1 
Mozilla/5.0 (X11; U; Linux i686; de) AppleWebKit/523+ (KHTML like Gecko) midori/0.1 
Mozilla/5.0 (X11; U; Linux i686; de) AppleWebKit/523 midori/0.1 
Midori 0.0.10 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.8.1.9) Gecko/20071103 Midori/0.0.10 
Midori 
Mozilla/5.0 (X11; U; Linux x86_64; ru-ru) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; it-it) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; hu-hu) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; fr-fr) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; en-us) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/528.5+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; en-us) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; en-gb) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/528.5+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; en-gb) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; de-de) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux x86_64; de-at) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; zh-tw) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; zh-cn) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; sv-se) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; ru-ru) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; pt-pt) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; pl-pl) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/528.5+) midori 
Mozilla/5.0 (X11; U; Linux i686; pl-pl) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; nl-nl) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; ja-jp) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori 
Mozilla/5.0 (X11; U; Linux i686; hu-hu) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori

More Midori user agents strings –>>

Minefield 
Minefield is a codename for Mozilla Firefox抯 nightly trunk builds. To prevent test releases from being mistaken for a new release it has become commonplace for alpha releases to carry codenames like Deer Park or Bon Echo. Similar thinking has resulted in the nightly trunk builds (bleeding-edge test binaries that will eventually form the basis of the next Firefox version) being rebranded as Minefield

Click on any string to get more details

Minefield 4.0a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:2.0a1pre) Gecko/2008060602 Minefield/4.0a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:2.0a1pre) Gecko/2008032002 Minefield/4.0a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:2.0a1pre) Gecko/2008032902 Minefield/4.0a1pre 
Minefield 3.7a5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.3a5pre) Gecko/20100418 Minefield/3.7a5pre 
Minefield 3.7a4pre 
Mozilla/5.0 (X11; U; Linux x86_64; ru; rv:1.9.3a4pre) Gecko/20100319 Minefield/3.7a4pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.3a4pre) Gecko/20100318 Minefield/3.7a4pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ru; rv:1.9.3a4pre) Gecko/20100402 Minefield/3.7a4pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.3a4pre) Gecko/20100318 Minefield/3.7a4pre 
Minefield 3.7a3pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.3a3pre) Gecko/20100313 Minefield/3.7a3pre (.NET CLR 4.0.20506) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.3a3pre) Gecko/20100306 Minefield/3.7a3pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.3a3pre) Gecko/20100305 Minefield/3.7a3pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.3a3pre) Gecko/20100312 Minefield/3.7a3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.3a3pre) Gecko/20100311 Minefield/3.7a3pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.3a3pre) Gecko/20100306 Minefield/3.7a3pre 
Minefield 3.7a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.3a1pre) Gecko/20091022 Minefield/3.7a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.3a1pre) Gecko/20090829 Minefield/3.7a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.3a1pre) Gecko/20091013 Minefield/3.7a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.3a1pre) Gecko/20091118 Minefield/3.7a1pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.3a1pre) Gecko/20090829 Minefield/3.7a1pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.3a1pre) Gecko/20091219 Minefield/3.7a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.3a1pre) Gecko/20091130 Minefield/3.7a1pre GTB6 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.3a1pre) Gecko/20100103 Minefield/3.7a1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.3a1pre) Gecko/20091002 Minefield/3.7a1pre 
Minefield 3.6a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090716 Minefield/3.6a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090501 Minefield/3.6a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090418 Minefield/3.6a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090417 Minefield/3.6a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090331 Minefield/3.6a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a1pre) Gecko/20090403 Minefield/3.6a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a1pre) Gecko/20090327 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090707 Minefield/3.6a1pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090420 Minefield/3.6a1pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090411 Minefield/3.6a1pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090407 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090401 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090324 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090709 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090425 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090424 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090418 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090415 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090413 Minefield/3.6a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090410 Minefield/3.6a1pre

More Minefield 3.6a1pre user agents strings –>>

Minefield 3.2a1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20081205 Minefield/3.2a1pre 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.2a1pre) Gecko/20090330 Kubuntu/8.10 (intrepid) Minefield/3.2a1pre 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.2a1pre) Gecko/20090128 Kubuntu/8.10 (intrepid) Minefield/3.2a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a1pre) Gecko/20090102 Ubuntu/9.04 (jaunty) Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2a1pre) Gecko/20090316 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090306 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090226 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090210 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1pre) Gecko/20090207 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090306 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090304 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090219 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090120 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1pre) Gecko/20090113 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9.2a1pre) Gecko/20090117 Minefield/3.2a1pre 
Mozilla/5.0 (Windows; U; Windows CE 6.0; en-US; rv:1.9.2a1pre) Gecko/20090219 Minefield/3.2a1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2a1pre) Gecko/20090315 Minefield/3.2a1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2a1pre) Gecko/20090302 Minefield/3.2a1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2a1pre) Gecko/20090225 Minefield/3.2a1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2a1pre) Gecko/20090224 Minefield/3.2a1pre

More Minefield 3.2a1pre user agents strings –>>

Minefield 3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20081201 Minefield/3.1b3pre 
Minefield 3.1b2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b2pre) Gecko/20081115 Minefield/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b2pre) Gecko/20081011 Minefield/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0 x64; en-US; rv:1.9.1b2pre) Gecko/20081026 Minefield/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1b2pre) Gecko/20081110 Minefield/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20090206 Minefield/3.1b2pre Firefox/3.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b2pre) Gecko/20081031 Minefield/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b2pre) Gecko/20081026 Minefield/3.1b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b2pre) Gecko/20081020 Minefield/3.1b2pre 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.1b2pre) Gecko/20081027 Minefield/3.1b2pre 
Minefield 3.1b2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b2) Gecko/20090128 Fedora/3.1-0.4.beta2.fc11 Minefield/3.1b2 
Minefield 3.1b1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b1pre) Gecko/20080929020931 Minefield/3.1b1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b1pre) Gecko/20080930020755 Minefield/3.1b1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b1pre) Gecko/20080916020338 Minefield/3.1b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b1pre) Gecko/20081001 Minefield/3.1b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b1pre) Gecko/20080930093007 Minefield/3.1b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b1pre) Gecko/20080927033433 Minefield/3.1b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b1pre) Gecko/20080926033937 Minefield/3.1b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b1pre) Gecko/20080920085411 Minefield/3.1b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b1pre) Gecko/20080913185648 Minefield/3.1b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b1pre) Gecko/20080904053130 Minefield/3.1b1pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1b1pre) Gecko/20080908170408 Minefield/3.1b1pre 
Minefield 3.1a2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1a2pre) Gecko/2008080205 Minefield/3.1a2pre 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.9.1a2pre) Gecko/20080826020557 Minefield/3.1a2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1a2pre) Gecko/2008072403 Minefield/3.1a2pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1a2pre) Gecko/20080826052737 Minefield/3.1a2pre 
Minefield 3.1a1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1a1pre) Gecko/2008071403 Minefield/3.1a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1a1pre) Gecko/2008071603 Firefox Minefield/3.1a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1a1pre) Gecko/2008071003 Minefield/3.1a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1a1pre) Gecko/2008062005 Minefield/3.1a1pre 
Minefield 3.0pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9pre) Gecko/2008042312 Minefield/3.0pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9pre) Gecko/2008061504 Minefield/3.0pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9pre) Gecko/2008032621 Fedora/3.0-0.49.cvs20080326.fc9 Minefield/3.0pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9pre) Gecko/2008041506 Minefield/3.0pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9pre) Gecko/2008041406 Minefield/3.0pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9pre) Gecko/2008040907 Minefield/3.0pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9pre) Gecko/2008032904 Minefield/3.0pre 
Minefield 3.0b5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b5pre) Gecko/2008032204 Minefield/3.0b5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b5pre) Gecko/2008031004 Minefield/3.0b5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b5pre) Gecko/2008030706 Minefield/3.0b5pre 
Minefield 3.0b4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b4pre) Gecko/2008022304 Minefield/3.0b4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b4pre) Gecko/2008021304 Minefield/3.0b4pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9b4pre) Gecko/2008022104 Minefield/3.0b4pre 
Minefield 3.0b3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b3pre) Gecko/2008010404 Minefield/3.0b3pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9b3pre) Gecko/2008011205 Minefield/3.0b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9b3pre) Gecko/2007121805 Minefield/3.0b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b3pre) Gecko/2007122205 Minefield/3.0b3pre 
Minefield 3.0b3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b3) Gecko/2008021322 Minefield/3.0b3 
Minefield 3.0b2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b2pre) Gecko/2007112704 Minefield/3.0b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9b2pre) Gecko/2007112619 Minefield/3.0b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b2pre) Gecko/2007120505 Minefield/3.0b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b2pre) Gecko/2007120405 Minefield/3.0b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b2pre) Gecko/2007111605 Minefield/3.0b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b2pre) Gecko/2007110805 Minefield/3.0b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9b2pre) Gecko/2007110913 Minefield/3.0b2pre 
Minefield 3.0b2 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9b2) Gecko/2007122607 Minefield/3.0b2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9b2) Gecko/2008011913 Minefield/3.0b2 
Minefield 3.0a9pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9a9pre) Gecko/2007092705 Minefield/3.0a9pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a9pre) Gecko/2007110705 Minefield/3.0a9pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a9pre) Gecko/2007102105 Minefield/3.0a9pre 
Minefield 3.0a8pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a8pre) Gecko/2007092004 Minefield/3.0a8pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0 x64; en-US; rv:1.9a8pre) Gecko/2007090213 Minefield/3.0a8pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a8pre) Gecko/2007082705 Minefield/3.0a8pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.9a8pre) Gecko/2007083104 Minefield/3.0a8pre 
Minefield 3.0a7pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a7pre) Gecko/2007073105 Minefield/3.0a7pre 
Minefield 3.0a6pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9a6pre) Gecko/20070615 Minefield/3.0a6pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a6pre) Gecko/20070630 Minefield/3.0a6pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a6pre) Gecko/20070626 Minefield/3.0a6pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a6pre) Gecko/20070622 Minefield/3.0a6pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a6pre) Gecko/20070604 Minefield/3.0a6pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a6pre) Gecko/20070603 Minefield/3.0a6pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a6pre) Gecko/20070602 Minefield/3.0a6pre 
Minefield 3.0a5pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9a5pre) Gecko/20070428 Minefield/3.0a5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a5pre) Gecko/20070529 Minefield/3.0a5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a5pre) Gecko/20070517 Minefield/3.0a5pre 
Minefield 3.0a4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9a4pre) Gecko/20070427 Minefield/3.0a4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a4pre) Gecko/20070427 Minefield/3.0a4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a4pre) Gecko/20070416 Minefield/3.0a4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a4pre) Gecko/20070407 Minefield/3.0a4pre 
Minefield 3.0a3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a3pre) Gecko/20070301 Minefield/3.0a3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9a3pre) Gecko/20070320 Minefield/3.0a3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a3pre) Gecko/20070218 Minefield/3.0a3pre 
Minefield 3.0a3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a3) Gecko/20070328 Minefield/3.0a3 
Minefield 3.0a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2pre) Gecko/20070204 Minefield/3.0a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2pre) Gecko/20070105 Minefield/3.0a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2pre) Gecko/20061231 Minefield/3.0a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2pre) Gecko/20061230 Minefield/3.0a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2pre) Gecko/20061221 Minefield/3.0a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a2pre) Gecko/20061225 Minefield/3.0a2pre 
Minefield 3.0a2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a2) Gecko/20070221 Minefield/3.0a2 
Minefield 3.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20070308 Minefield/3.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20061111 Minefield/3.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20061016 Minefield/3.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20060819 Minefield/3.0a1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a1) Gecko/20060609 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 6.0 x64; en-US; rv:1.9a1) Gecko/20061007 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9a1) Gecko/20060926 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.2 x64; en-US; rv:1.9a1) Gecko/20061007 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061217 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061129 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061125 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061124 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061123 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/2006112204 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20061102 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060910 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060826 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060816 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060809 Minefield/3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060725 Minefield/3.0a1

More Minefield 3.0a1 user agents strings –>>

Minefield 3.0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.2 x64; en-US; rv:1.9.0.7) Gecko/2009030713 Minefield/3.0.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6.0; en-US; rv:1.9.0.7) Gecko/2009030517 Minefield/3.0.7 
Minefield 3.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009030302 Minefield/3.0.6 
Minefield 3.0.5pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0 x64; en-US; rv:1.9.0.3pre) Gecko/2008111500 Minefield/3.0.5pre 
Minefield 3.0.4 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.4) Gecko/2008112012 Minefield/3.0.4 
Minefield 3.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1) Gecko/2008071910 Minefield/3.0.1 
Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.0.1) Gecko/2009010915 Minefield/3.0.1 
Minefield 3.0 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.6) Gecko/2009020911 Ubuntu/8.10 (intrepid) Minefield/3.0 MEGAUPLOAD 2.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9) Gecko/2008071513 Minefield/3.0 
Minimo 
"Mini Mozilla" , a version of the Mozilla web browser for small devices like PDAs and mobile phones.

Click on any string to get more details

Minimo 0.025 
Mozilla/5.0 (X11; U; Linux arm7tdmi; rv:1.8.1.11) Gecko/20071130 Minimo/0.025 
Minimo 0.024 
Mozilla/5.0 (X11; U; Linux arm7tdmi; rv:1.8.1.8) Gecko/20071018 Minimo/0.024 
Minimo 0.020 
Mozilla/5.0 (X11; U; Linux armv6l; rv: 1.8.1.5pre) Gecko/20070619 Minimo/0.020 
Mozilla/5.0 (Windows; Windows; U; Windows NT 5.1; Windows CE 5.2; rv:1.8.1.4pre) Gecko/20070327 Minimo/0.020 
Mozilla/5.0 (Windows; U; Windows CE 5.2; rv:1.8.1.4pre) Gecko/20070327 Minimo/0.020 
Mozilla/5.0 (Windows; U; Windows CE 5.1; rv:1.8.1.4pre) Gecko/20070327 Minimo/0.020 
Minimo 0.016 
Mozilla/5.0 (X11; U; OpenBSD macppc; rv:1.8.1) Gecko/20070222 Minimo/0.016 
Mozilla/5.0 (Windows; U; Windows CE 5.2; rv:1.8.1a3) Gecko/20060610 Minimo/0.016 
Mozilla/5.0 (Windows; U; Windows CE 5.1; rv:1.8.1a3) Gecko/20060610 Minimo/0.016 
Minimo 0.015 
Mozilla/5.0 (Windows; U; Windows CE 5.1; rv:1.8) Gecko/20060428 Minimo/0.015 
Minimo 0.013 
Mozilla/5.0 (Windows; U; Windows CE 4.20; rv:1.8) Gecko/20060215 Minimo/0.013 
Minimo 0.007 
Mozilla/5.0 (Windows; U; Windows CE 4.21; rv:1.8b4) Gecko/20050720 Minimo/0.007 
Mozilla

Click on any string to get more details

Mozilla 1.9a3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9a3pre) Gecko/20070330 
Mozilla 1.9.2a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9.2a1pre) Gecko 
Mozilla 1.9.1b3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b3) Gecko/20090305 
Mozilla 1.9.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.9.0.9) Gecko/2009040821 
Mozilla 1.9.0.8 
Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9.0.8) Gecko/2009032711 
Mozilla 1.9.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.7) Gecko/2009032803 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.0.7) Gecko/2009021910 MEGAUPLOAD 1.0 
Mozilla/5.0 (Windows; U; BeOS; en-US; rv:1.9.0.7) Gecko/2009021910 
Mozilla 1.9.0.6 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.9.0.6) Gecko/2009020911 
Mozilla/5.0 (X11; U; Linux i686; en; rv:1.9.0.6) Gecko/20080528 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.6) Gecko/2009020409 
Mozilla 1.9.0.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.3) Gecko/2008092814 (Debian-3.0.1-1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3) Gecko/2008092816 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3) Gecko/2008090713 
Mozilla 1.9.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.2) Gecko Fedora/1.9.0.2-1.fc9 
Mozilla 1.9.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.14) Gecko/2009091010 
Mozilla 1.9.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.10) Gecko/2009042523 
Mozilla 1.9.0.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.1) Gecko/2008072610 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1) Gecko/2008072820 Ubuntu/8.04 (hardy) (Linux Mint) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1) Gecko 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.1) Gecko/2008070206 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-au; rv:1.9.0.1) Gecko/2008070206 
Mozilla 1.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9) Gecko 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9) Gecko 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs; rv:1.9) Gecko/2008052906 
Mozilla 1.8b2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8b2) Gecko/20050702 
Mozilla 1.8b 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8b) Gecko/20050217 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8b) Gecko/20050217 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8b) Gecko/20050217 
Mozilla 1.8a6 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8a6) Gecko/20050111 
Mozilla 1.8a5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8a5) Gecko/20041122 
Mozilla 1.8a4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8a4) Gecko/20040927 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8a4) Gecko/20040927 
Mozilla 1.8a3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8a3) Gecko/20040817 
Mozilla 1.8a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8a1) Gecko/20040520 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8a1) Gecko/20040520 
Mozilla 1.8.1a2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1a2) Gecko/20060512 
Mozilla 1.8.1.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8) Gecko/20071022 
Mozilla 1.8.1.6 
Mozilla/5.001 (X11; U; Linux i686; rv:1.8.1.6; de-ch) Gecko/25250101 (ubuntu-feisty) 
Mozilla 1.8.1.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070531 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20070508 (Debian-1.8.1.4-2ubuntu5) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/20061201 Mozilla/5.0 (Linux Mint) 
Mozilla 1.8.1.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/20061201 MEGAUPLOAD 1.0 (Ubuntu-feisty) 
Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.3) Gecko/20070310 
Mozilla/5.0 (X11; ; Linux i686; en-US; rv:1.8.1.3) Gecko 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070321 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Mozilla/4.8 [en] (Windows NT 5.1; U) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; nl-NL; rv:1.8.1.3) Gecko/20080722 
Mozilla 1.8.1.2pre 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.2pre) Gecko/20070223 
Mozilla 1.8.1.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070208 
Mozilla/5.0 (compatible; Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070219 
Mozilla 1.8.1.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.18) Gecko/20081029 
Mozilla 1.8.1.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.16) Gecko/20080702 
Mozilla 1.8.1.15 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.8.1.15) Gecko/20080620 Mozilla/4.0 
Mozilla 1.8.1.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080313 
Mozilla 1.8.1.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.12) Gecko/20080201 
Mozilla 1.8.1.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.8.1.11) Gecko/20071127 Mozilla 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11) Gecko/20071213 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.11) Gecko/20071206 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.11) Gecko/20071127 
Mozilla 1.8.1.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.1) Gecko/20061205 Mozilla/5.0 (Debian-2.0.0.1+dfsg-2) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.8.1.1) Gecko/20061204 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.1) Gecko/20061204 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.1) Gecko/20061204 
Mozilla 1.8.0.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.9) Gecko/20061206 
Mozilla 1.8.0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.6) Gecko/20060728 
Mozilla 1.8.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.5) Gecko/20060719 KHTML/3.5.5 
Mozilla 1.8.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060912 pango-text 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060508 
Mozilla 1.8.0.14eol 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.14eol) Gecko/20070505 (Debian-1.8.0.15~pre080614d-0etch1) 
Mozilla 1.8.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060126 
Mozilla 1.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8) Gecko/20051111 
Mozilla 1.7b 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.7b) Gecko/20040429 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7b) Gecko/20040421 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7b) Gecko/20040316 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7b) Gecko/20040421 
Mozilla 1.7.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.9) Gecko/20050711 
Mozilla 1.7.8 
Mozilla/5.0 (X11; U; Linux x86_64; de-AT; rv:1.7.8) Gecko/20050513 Debian/1.7.8-1 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.8) Gecko/20061113 Debian/1.7.8-1sarge8 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.8) Gecko/20060904 Debian/1.7.8-1sarge7.2.2 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.8) Gecko/20060628 Debian/1.7.8-1sarge7.1 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.8) Gecko/20050927 Debian/1.7.8-1sarge3 
Mozilla/5.0 (X11; U; Linux i686; rv:1.7.8) Gecko/20050831 Debian/1.7.8-1sarge2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050927 Debian/1.7.8-1sarge3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050921 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050831 Debian/1.7.8-1sarge2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050610 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050513 Debian/1.7.8-1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050512 Red Hat/1.7.8-1.1.3.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050511 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.7.8) Gecko/20050511 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.8) Gecko/20050511 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.8) Gecko/20050511 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr; rv:1.7.8) Gecko/20050511 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.8) Gecko/20050511 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7.8) Gecko/20050511 (No IDN) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7.8) Gecko/20050511

More Mozilla 1.7.8 user agents strings –>>

Mozilla 1.7.7 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.7) Gecko/20050421 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.7) Gecko/20050427 Red Hat/1.7.7-1.1.3.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.7) Gecko/20050420 Debian/1.7.7-2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.7) Gecko/20050414 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.7) Gecko/20050415 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.7) Gecko/20050414 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.7) Gecko/20050414 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.7) Gecko/20050414 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7.7) Gecko/20050414 
Mozilla 1.7.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050328 Fedora/1.7.6-1.2.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.6) Gecko/20050319 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU; rv:1.7.6) Gecko/20050319 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.6) Gecko/20050319 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.6) Gecko/20050319 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.6) Gecko/20050225 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.6) Gecko/20050319 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7.6) Gecko/20050319 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.6) Gecko/20050319 
Mozilla 1.7.5 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.5) Gecko/20041221 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041221 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041013 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.9.0.6) Gecko/2009011913 Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.5) Gecko/20041221 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041217 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.5) Gecko/20041217 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20041217 
Mozilla/5.0 (Windows; U; Windows NT 5.0; cs-CZ; rv:1.7.5) Gecko/20041217 
Mozilla/5.0 (Windows NT 5.1; U; pt-br; rv:1.7.5) Gecko/20041110 
Mozilla/5.0 (Windows NT 5.1; U; es-es; rv:1.7.5) Gecko/20041110 
Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.7.5) Gecko/20041110 
Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.7.5) Gecko/20041110 
Mozilla/5.0 (OS/2; U; Warp 4.5; de-DE; rv:1.7.5) Gecko/20050523 
Mozilla/5.0 (Macintosh; Intel Mac OS X; U; nb; rv:1.7.5) Gecko/20041110 
Mozilla 1.7.3 
Mozilla/5.0 (X11; U; Linux i686; hu; rv:1.7.3) Gecko/20050130 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.7.3) Gecko/20040913 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.3) Gecko/20041007 Debian/1.7.3-5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.3) Gecko/20040913 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Win98; fr; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Windows; U; Win98; de-AT; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; fr; rv:1.7.3) Gecko/20040910 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; es-ES; rv:1.7.3) Gecko/20040910 
Mozilla 1.7.2 
Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.7.2) Gecko/20040804 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.2) Gecko/20040906 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.2) Gecko/20040804 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.2) Gecko/20040803 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.2) Gecko/20040906 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.2) Gecko/20040810 Debian/1.7.2-2 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.2) Gecko/20040804 
Mozilla/5.0 (X11; U; FreeBSD i386; ja-JP; rv:1.7.2) Gecko/20050330 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.7.2) Gecko/20040709 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.7.2) Gecko/20040803 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.2) Gecko/20040804 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.2) Gecko/20040803 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.2) Gecko/20040803 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-AT; rv:1.7.2) Gecko/20040803 
Mozilla/5.0 (Windows; ; Windows NT 5.1; rv:1.7.2) Gecko/20040804 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.2) Gecko/20040803 
Mozilla 1.7.13 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.13) Gecko/20060509 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.7.13) Gecko/20060901 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.13) Gecko/20060717 Debian/1.7.13-0.2ubuntu1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.13) Gecko/20060427 Debian/1.7.13-0ubuntu05.04 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.13) Gecko/20060417 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.7.13) Gecko/20060417 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.7.13) Gecko/20061230 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.7.13) Gecko/20060414 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.13) Gecko/20060414 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7.13) Gecko/20060414 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.13) Gecko/20060414 
Mozilla/4.0 (compatible; Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.13) Gecko/20060414; Windows NT 5.1) 
Mozilla 1.7.12 
Mozilla/5.0 (X11; U; Linux i686; es-ES; rv:1.7.12) Gecko/20050929 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20060607 Debian/1.7.12-1.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20060216 Debian/1.7.12-1.1ubuntu2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20060205 Debian/1.7.12-1.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20060202 Fedora/1.7.12-1.5.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051203 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051013 Debian/1.7.12-1ubuntu1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051010 Debian/1.7.12-0ubuntu2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20051007 Debian/1.7.12-1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20050926 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20050923 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20050921 Red Hat/1.7.12-1.1.3.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20050921 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.12) Gecko/20050920 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.12) Gecko/20060205 Debian/1.7.12-1.1 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.12) Gecko/20050923 Fedora/1.7.12-1.5.1 
Mozilla/5.0 (X11; U; Linux i686; cs-CZ; rv:1.7.12) Gecko/20050929 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); fr; rv:1.7.12) Gecko/20051010 Debian/1.7.12-0ubuntu2 
Mozilla/5.0 (X11; U; AIX 5.3; en-US; rv:1.7.12) Gecko/20051025 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.7.12) Gecko/20050915

More Mozilla 1.7.12 user agents strings –>>

Mozilla 1.7.11 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7.11) Gecko/20050802 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.11) Gecko/20050729 
Mozilla/5.0 (Windows; U; WinNT4.0; de-AT; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.11) Gecko/20050728 (No IDN) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Windows; U; Win95; de-AT; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-AT; rv:1.7.11) Gecko/20050728 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; fr-FR; rv:1.7.11) Gecko/20050727 
Mozilla 1.7.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.10) Gecko/20050811 Fedora/1.7.10-1.2.1.legacy 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.10) Gecko/20050727 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.7.10) Gecko/20050722 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.10) Gecko/20050716 
Mozilla 1.7.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.7.1) Gecko/20040707 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.1) Gecko/20040707 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7.1) Gecko/20040707 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.7.1) Gecko/20040707 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.1) Gecko/20040707 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.7.1) Gecko/20040707 
Mozilla 1.7.0.13 
Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.7.0.13) Gecko/20060901 
Mozilla 1.7 
Mozilla/5.0 (X11; U; SunOS sun4v; en-US; rv:1.7) Gecko/20060120 
Mozilla/5.0 (X11; U; SunOS sun4u; fr-FR; rv:1.7) Gecko/20040621 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7) Gecko/20060629 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7) Gecko/20060120 
Mozilla/5.0 (X11; U; SunOS sun4u; de-DE; rv:1.7) Gecko/20070606 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.7) Gecko/20060627 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.7) Gecko/20051122 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.7) Gecko/20050502 
Mozilla/5.0 (X11; U; SunOS i86pc; en-US; rv:1.7) Gecko/20041221 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7) Gecko/20040514 
Mozilla/5.0 (X11; U; FreeBSD; i386; it-IT; rv:1.7) Gecko 
Mozilla/5.0 (X11; U; FreeBSD; i386; en-US; rv:1.7) Gecko 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.7) Gecko/20040616 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.7) Gecko/20040803 Firefox/0.9.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040616 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7) Gecko/20040514 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.7) Gecko/20040616 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7) Gecko/20040616 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.7) Gecko/20040616 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7) Gecko/20040616

More Mozilla 1.7 user agents strings –>>

Mozilla 1.6a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.6a) Gecko/20031030 
Mozilla 1.6 
Mozilla/5.0 (X11; U; Linux x86_64; fr; rv:1.6) Gecko/20040115 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.6) Gecko/20040413 Debian/1.6-5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.6) Gecko/20040114 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.6) Gecko/20040113 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.6) Gecko/20040113 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.6) Gecko/20040115 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.6) Gecko/20040114 
Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.6) Gecko/20040113 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.6) Gecko/20040113 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.6) Gecko/20040113 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.6) Gecko/20040113 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.6) Gecko/20040113 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.6) Gecko/20040113 
Mozilla/5.0 (Photon; U; QNX x86pc; en-US; rv:1.6) Gecko/20040429 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.6) Gecko/20040113 
Mozilla 1.5b 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5b) Gecko/20030827 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.5b) Gecko/20030827 
Mozilla 1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5a) Gecko/20030718 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.5a) Gecko/20030718 
Mozilla 1.5.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.5.1) Gecko/20031120 
Mozilla 1.5 
Mozilla/5.0 (X11; U; SunOS5.10 sun4u; ja-JP; rv:1.5) Gecko/20031022 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.5) Gecko/20031007 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.5) Gecko/20031007 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.5) Gecko/20031007 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5) Gecko/20031007 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.5) Gecko/20030916 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.5) Gecko/20031007 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.5) Gecko/20031007 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.5) Gecko/20030916 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.5) Gecko/20031007 
Mozilla/5.0 (Windows; U; Win98; de-AT; rv:1.5) Gecko/20031007 
Mozilla 1.4b 
Mozilla/5.0 (Windows; U; WinNT4.0; it-IT; rv:1.4b) Gecko/20030507 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.4b) Gecko/20030507 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4b) Gecko/20030507 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4b) Gecko/20030427 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4b) Gecko/20030507 
Mozilla 1.4a 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.4a) Gecko/20030318 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4a) Gecko/20030401 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.4a) Gecko/20030401 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4a) Gecko/20030401 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.4a) Gecko/20030401 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4a) Gecko/20030401 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.4a) Gecko/20030401 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.4a) Gecko/20030401 
Mozilla 1.4.3 
Mozilla/5.0 (X11; U; IRIX64 IP35; en-US; rv:1.4.3) Gecko/20040909 
Mozilla 1.4.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4.2) Gecko/20040220 
Mozilla 1.4.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4.1) Gecko/20040406 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4.1) Gecko/20031114 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4.1) Gecko/20031008 
Mozilla 1.4 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.4) Gecko/20041224 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.4) Gecko/20030714 Debian/1.4-2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030908 Debian/1.4-4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030828 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030827 Debian/1.4-3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030821 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030818 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030723 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.4) Gecko/20030908 Debian/1.4-4 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.4) Gecko/20030812 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.4) Gecko/20030624 
Mozilla/5.0 (X11; U; Linux i586; de-AT; rv:1.4) Gecko/20030908 Debian/1.4-4 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.4) Gecko/20030624 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4) Gecko/20030624 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4) Gecko/20030529 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.4) Gecko/20030624 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.4) Gecko/20030624 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030624 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030612 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030529

More Mozilla 1.4 user agents strings –>>

Mozilla 1.3b 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3b) Gecko/20030210 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3b) Gecko/20030125 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3b) Gecko/20021213 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.3b) Gecko/20030210 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.3b) Gecko/20030210 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.3b) Gecko/20030210 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3b) Gecko/20030210 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3b) Gecko/20030204 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.3b) Gecko/20030210 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.3b) Gecko/20030210 
Mozilla 1.3a 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.3a) Gecko/20021212 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.3a) Gecko/20021212 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.3a) Gecko/20021212 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3a) Gecko/20021212 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.3a) Gecko/20021212 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.3a) Gecko/20021212 
Mozilla 1.3.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.3.1) Gecko/20030509 
Mozilla/5.0 (X11; U; Linux i686; hu-HU; rv:1.3.1) Gecko 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3.1) Gecko/20030428 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3.1) Gecko/20030425 
Mozilla/5.0 (Windows; U; WinNT4.0; de-AT; rv:1.3.1) Gecko/20030425 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.3.1) Gecko/20030425 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.3.1) Gecko/20030425 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3.1) Gecko/20030425 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.3.1) Gecko/20030425 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.3.1) Gecko/20030425 
Mozilla 1.3 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.3) Gecko/20030318 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030523 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030413 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030401 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030327 Debian/1.3-4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030326 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030320 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030314 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030313 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3) Gecko/20030312 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.3) Gecko/20030430 Debian/1.3-5 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.3) Gecko/20030327 Debian/1.3-4 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.3) Gecko/20030312 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.3) Gecko/20030312 
Mozilla/5.0 (X11; U; HP-UX 9000/785; en-US; rv:1.3) Gecko/20030321 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.3) Gecko/20030312 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.3) Gecko/20030312 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.3) Gecko/20030312 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3) Gecko/20030312 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.3) Gecko/20030312

More Mozilla 1.3 user agents strings –>>

Mozilla 1.2b 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2b) Gecko/20021016 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.2b) Gecko/20021016 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.2b) Gecko/20021016 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.2b) Gecko/20021016 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2b) Gecko/20021016 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.2b) Gecko/20021016 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.2b) Gecko/20021016 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.2b) Gecko/20021016 
Mozilla 1.2a 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2a) Gecko/20020910 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.2a) Gecko/20020910 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2a) Gecko/20020910 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.2a) Gecko/20020910 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.2a) Gecko/20020910 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2a) Gecko/20020910 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.2a) Gecko/20020910 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.2a) Gecko/20020910 
Mozilla 1.2.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.2.1) Gecko/20030711 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.2.1) Gecko/20021217 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.2.1) Gecko/20021212 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.2.1) Gecko/20021205 
Mozilla/5.0 (X11; U; Linux i686;en-US; rv:1.2.1) Gecko/20030225 
Mozilla/5.0 (X11; U; Linux i686; zh-CN; rv:1.2.1) Gecko/20030225 
Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.2.1) Gecko/20021130 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20030427 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20030409 Debian/1.2.1-9woody2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20030225 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20030113 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20021213 Debian/1.2.1-2.bunk 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20021208 Debian/1.2.1-2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20021204 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20021203 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1) Gecko/20021130 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.2.1) Gecko/20021226 Debian/1.2.1-9 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.2.1) Gecko/20021204 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.2.1) Gecko/20021130 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.2.1) Gecko/20021204

More Mozilla 1.2.1 user agents strings –>>

Mozilla 1.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2) Gecko/20021202 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2) Gecko/20021126 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.2) Gecko/20021203 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.2) Gecko/20050223 
Mozilla/5.0 (X11; U; HP-UX 9000/785; en-US; rv:1.2) Gecko/20021203 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.2) Gecko/20021126 
Mozilla/5.0 (Windows; U; WinNT4.0; de-AT; rv:1.2) Gecko/20021126 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.2) Gecko/20021126 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2) Gecko/20021126 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.2) Gecko/20021126 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.2) Gecko/20021126 
Mozilla 1.1b 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.1b) Gecko/20020722 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.1b) Gecko/20020721 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.1b) Gecko/20020721 
Mozilla 1.1a 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.1a) Gecko/20020610 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.1a) Gecko/20020611 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.1a) Gecko/20020611 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.1a) Gecko/20020611 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.1a) Gecko/20020610 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.1a) Gecko/20020611 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.1a) Gecko/20020611 
Mozilla 1.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.1) Gecko/20020925 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.1) Gecko/20020909 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.1) Gecko/20020827 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.1) Gecko/20020927 
Mozilla/5.0 (X11; U; Linux i686; it-IT; rv:1.1) Gecko/20020826 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.1) Gecko/20020913 Debian/1.1-1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.1) Gecko/20020829 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.1) Gecko/20020828 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.1) Gecko/20020826 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.1) Gecko/20020913 Debian/1.1-1 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.1) Gecko/20020826 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.1) Gecko/20020826 
Mozilla/5.0 (X11; U; Linux i386; en-US; rv:1.1) Gecko/20020826 
Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.1) Gecko/20021223 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; WinNT4.0; de-AT; rv:1.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.1) Gecko/20020826

More Mozilla 1.1 user agents strings –>>

Mozilla 1.0rc3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0rc3) Gecko/20020529 Debian/1.0rc3-1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0rc3) Gecko/20020523 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.0rc3) Gecko/20020523 
Mozilla 1.0rc2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0rc2) Gecko/20020510 
Mozilla/5.0 (X11; U; AIX 005A471A4C00; en-US; rv:1.0rc2) Gecko/20020514 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0rc2) Gecko/20020510 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.0rc2) Gecko/20020510 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.0rc2) Gecko/20020510 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0rc2) Gecko/20020510 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.0rc2) Gecko/20020510 
Mozilla 1.0rc1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0rc1) Gecko/20020417 
Mozilla 1.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.2) Gecko/20030716 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.0.2) Gecko/20030208 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.2) Gecko/20021216 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.0.2) Gecko/20021216 
Mozilla 1.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20021203 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20021122 Debian/1.0.1-2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20021110 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20021003 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020919 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020918 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020912 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020903 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020830 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.0.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0.1) Gecko/20020815 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.0.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.0.1) Gecko/20020826 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020903 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.1) Gecko/20020830 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.0.1) Gecko/20020826 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0.1) Gecko/20020826 
Mozilla 1.0.0 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.0.0) Gecko/20020611 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.0.0) Gecko/20020622 Debian/1.0.0-0.woody.1 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.0.0) Gecko/20020623 Debian/1.0.0-0.woody.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.0) Gecko/20021004 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.0) Gecko/20020623 Debian/1.0.0-0.woody.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.0) Gecko/20020612 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.0) Gecko/20020605 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.0) Gecko/20020529 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.0.0) Gecko/20020615 Debian/1.0.0-3 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.0.0) Gecko/20020623 Debian/1.0.0-0.woody.1 
Mozilla/5.0 (X11; U; HP-UX 9000/785; en-US; rv:1.0.0) Gecko/20020605 
Mozilla/5.0 (Windows; U; WinNT4.0; fr-FR; rv:1.0.0) Gecko/20020530 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.0.0) Gecko/20020530 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.0.0) Gecko/20020530 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.0) Gecko/20020530 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.0) Gecko/20020509 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.0.0) Gecko/20020530 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.0.0) Gecko/20020530 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0.0) Gecko/20020530 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.0.0) Gecko/20020530

More Mozilla 1.0.0 user agents strings –>>

Mozilla 0.9.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.9) Gecko/20020513 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.9) Gecko/20020423 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.9) Gecko/20020408 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.9) Gecko/20020313 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:0.9.9) Gecko/20020513 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:0.9.9) Gecko/20020311 
Mozilla 0.9.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.8) Gecko/20020204 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:0.9.8) Gecko/20020204 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:0.9.8) Gecko/20020204 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.8) Gecko/20020204 
Mozilla 0.9.7 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:0.9.7) Gecko/20011221 
Mozilla 0.9.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.6) Gecko/20011202 
Mozilla 0.9.5 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:0.9.5) Gecko/20011011 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:0.9.5) Gecko/20011011 
Mozilla 0.9.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.4) Gecko/20010923 
Mozilla 0.9.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.3) Gecko/20010801 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:0.9.3) Gecko/20010802 
Mozilla 0.9.2.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.2.1) Gecko/20010901 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.2.1) Gecko/20010901 
Mozilla 0.9.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.2) Gecko/20010809 
Mozilla 
Mozilla/5.001 (Macintosh; N; PPC; ja) Gecko/25250101 
MultiZilla

Click on any string to get more details

MultiZilla v1.5.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4; MultiZilla v1.5.0.1) Gecko/20030624 
MultiZilla v1.5.0.0f 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4; MultiZilla v1.5.0.0f) Gecko/20030624 
MultiZilla v1.4.0.3J 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3; MultiZilla v1.4.0.3J) Gecko/20030312 
MultiZilla v1.4.0.3e 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3; MultiZilla v1.4.0.3e) Gecko/20030312 
MultiZilla v1.1.32 final 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1; MultiZilla v1.1.32 final) Gecko/20021130 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2.1; MultiZilla v1.1.32 final) Gecko/20021130 
Mozilla/5.0 (Windows; U; Win98; de-AT; ; MultiZilla v1.1.32 final) Gecko/20030127 
MultiZilla v1.1.21 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.1) Gecko/20020826 MultiZilla/v1.1.21 
MultiZilla 1.7.9.0a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.12) Gecko/20050915 MultiZilla/1.7.9.0a 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 MultiZilla/1.7.9.0a 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.12) Gecko/20050915 MultiZilla/1.7.9.0a 
MultiZilla 1.6.1.0a 
Mozilla/5.0 (Windows; U; Windows XP) Gecko MultiZilla/1.6.1.0a 
MyIE2

Click on any string to get more details

MyIE2 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; MyIE2; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; SV1; MyIE2; .NET CLR 1.1.4322; .NET CLR 2.0.50727; WinFX RunTime 3.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; MyIE2; InfoPath.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; MyIE2; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; MyIE2; .NET CLR 1.1.4322; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; MyIE2; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; MyIE2; .NET CLR 1.1.4322; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; MyIE2; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; MyIE2; .NET CLR 1.1.4322; .NET CLR 1.0.3705) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; MyIE2; InfoPath.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; MyIE2; .NET CLR 2.0.50727) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; MyIE2; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; MyIE2; .NET CLR 1.0.3705; .NET CLR 1.1.4322) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; MyIE2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Q312461; MyIE2; YComp 5.0.2.6) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Q312461; MyIE2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MyIE2; YComp 5.0.2.6) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MyIE2; SV1; iebar) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MyIE2; SV1; Alexa Toolbar) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MyIE2; SV1)

More MyIE2 user agents strings –>>

Namoroka 
After Firefox3.5 ("Shiretoko"), the next version of Firefox is beeing developed under the project name "Namoroka". The Firefox version number is "3.6" and the Gecko Platform version number is "1.9.2".

Click on any string to get more details

Namoroka 3.6a2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a2pre) Gecko/20090908 Ubuntu/9.04 (jaunty) Namoroka/3.6a2pre GTB5 (.NET CLR 3.5.30729) 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a2pre) Gecko/20090901 Ubuntu/9.10 (karmic) Namoroka/3.6a2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a2pre) Gecko/20090824 Ubuntu/9.10 (karmic) Namoroka/3.6a2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a2pre) Gecko/20090817 Ubuntu/9.04 (jaunty) Namoroka/3.6a2pre 
Mozilla/5.0 (X11; U; Linux x86_64; cs-CZ; rv:1.9.2a2pre) Gecko/20090826 Namoroka/3.6a2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a2pre) Gecko/20090921 Ubuntu/9.04 (jaunty) Namoroka/3.6a2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a2pre) Gecko/20090906 Ubuntu/9.04 (jaunty) Namoroka/3.6a2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a2pre) Gecko/20090825 Namoroka/3.6a2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2a2pre) Gecko/20090918 Namoroka/3.6a2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2a2pre) Gecko/20090917 Namoroka/3.6a2pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; cs; rv:1.9.2a2pre) Gecko/20090912 Namoroka/3.6a2pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a2pre) Gecko/20090826 Namoroka/3.6a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a2pre) Gecko/20090826 Namoroka/3.6a2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a2pre) Gecko/20090816 Namoroka/3.6a2pre 
Namoroka 3.6a1 
Mozilla/5.0 (X11; U; Linux i686; pl; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 (Debian GNU/Linux Sid) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1 
Namoroka 3.6.3pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.3pre) Gecko/20100324 Ubuntu/9.04 (jaunty) Namoroka/3.6.3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.3pre) Gecko/20100316 Ubuntu/9.10 (karmic) Namoroka/3.6.3pre 
Namoroka 3.6.3 
Mozilla/5.0 (X11; U; NetBSD i386; en-US; rv:1.9.2.3) Gecko/20100403 Namoroka/3.6.3 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.3) Gecko/20100402 Namoroka/3.6.3 
Namoroka 3.6.2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.2pre) Gecko/20100310 Ubuntu/9.10 (karmic) Namoroka/3.6.2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.2pre) Gecko/20100306 Namoroka/3.6.2pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.2pre) Gecko/20100129 Ubuntu/9.10 (karmic) Namoroka/3.6.2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.2pre) Gecko/20100315 Ubuntu/9.10 (karmic) Namoroka/3.6.2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.2pre) Gecko/20100310 Ubuntu/8.10 (intrepid) Namoroka/3.6.2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.2pre) Gecko/20100129 Ubuntu/9.10 (karmic) Namoroka/3.6.2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.2pre) Gecko/20100312 Namoroka/3.6.2pre (.NET CLR 3.5.30729) 
Namoroka 3.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2) Gecko/20100206 Namoroka/3.6 
NCSA_Mosaic 
Mosaic was the first popular World Wide Web browser and Gopher client. It was the first browser to actually implement images embedded in the text, rather than displayed in a separate window. Mosaic was developed at the National Center for Supercomputing Applications (NCSA) beginning in late 1992. NCSA released the browser in 1993, and officially discontinued development and support on January 7, 1997.

Click on any string to get more details

NCSA_Mosaic 3.0 
NCSA Mosaic/3.0 (Windows 95) 
NCSA_Mosaic 2.7b4 
NCSA_Mosaic/2.7b4 (X11;AIX 1 000180663000) 
NCSA_Mosaic 2.6 
NCSA_Mosaic/2.6 (X11; SunOS 4.1.3 sun4m) 
NCSA_Mosaic 2.0 
NCSA_Mosaic/2.0 (Windows 3.1) 
NCSA_Mosaic 1.0 
NCSA Mosaic/1.0 (X11;SunOS 4.1.4 sun4m) 
NetNewsWire

Click on any string to get more details

NetNewsWire 3.2.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; de-de) AppleWebKit/531.22.7 (KHTML, like Gecko) NetNewsWire/3.2.7 
NetNewsWire 3.2.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; de-de) AppleWebKit/531.21.8 (KHTML, like Gecko) NetNewsWire/3.2.3 
NetNewsWire 3.1.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; de-de) AppleWebKit/525.28.3 (KHTML, like Gecko) NetNewsWire/3.1.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; de-de) AppleWebKit/525.27.1 (KHTML, like Gecko) NetNewsWire/3.1.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/525.18 (KHTML, like Gecko) NetNewsWire/3.1.7 
NetNewsWire 3.0d7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) NetNewsWire/3.0d7 
NetNewsWire 2.1.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.8 (KHTML, like Gecko) NetNewsWire/2.1.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko) NetNewsWire/2.1.1 
NetNewsWire 2.0.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/417.9 (KHTML, like Gecko) NetNewsWire/2.0.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/417.9 (KHTML, like Gecko) NetNewsWire/2.0.1 
NetNewsWire 2.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/417.9 (KHTML, like Gecko) NetNewsWire/2.0 
NetPositive 
Default browser for the Be Operating System (BeOS)

Click on any string to get more details

NetPositive 2.2.2 
Mozilla/3.0 (compatible; NetPositive/2.2.2; BeOS) 
NetPositive 2.2 
Mozilla/3.0 (compatible; NetPositive/2.2) 
NetPositive 2.1.1 
Mozilla/3.0 (compatible; NetPositive/2.1.1; BeOS) 
Netscape

Click on any string to get more details

Netscape 9.0RC1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.8pre) Gecko/20070928 Firefox/2.0.0.7 Navigator/9.0RC1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.8pre) Gecko/20070928 Firefox/2.0.0.7 Navigator/9.0RC1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.8pre) Gecko/20071001 Firefox/2.0.0.7 Navigator/9.0RC1 
Netscape 9.0b3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.7pre) Gecko/20070815 Firefox/2.0.0.6 Navigator/9.0b3 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.7pre) Gecko/20070815 Firefox/2.0.0.6 Navigator/9.0b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7pre) Gecko/20070815 Firefox/2.0.0.6 Navigator/9.0b3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.7pre) Gecko/20070815 Firefox/2.0.0.6 Navigator/9.0b3 
Netscape 9.0b2 
Mozilla/5.0 (Windows; U; Windows 98; en-US; rv:1.8.1.5pre) Gecko/20070710 Firefox/2.0.0.4 Navigator/9.0b2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.5pre) Gecko/20070710 Firefox/2.0.0.4 Navigator/9.0b2 
Netscape 9.0.0.6 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080219 Firefox/2.0.0.12 Navigator/9.0.0.6 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.12) Gecko/20080219 Firefox/2.0.0.12 Navigator/9.0.0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080219 Firefox/2.0.0.12 Navigator/9.0.0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.12) Gecko/20080219 Firefox/2.0.0.12 Navigator/9.0.0.6 
Netscape 9.0.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.11pre) Gecko/20071206 Firefox/2.0.0.11 Navigator/9.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11pre) Gecko/20071206 Firefox/2.0.0.11 Navigator/9.0.0.5 GTB5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11pre) Gecko/20071206 Firefox/2.0.0.11 Navigator/9.0.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.11pre) Gecko/20071206 Firefox/2.0.0.11 Navigator/9.0.0.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.11pre) Gecko/20071206 Firefox/2.0.0.11 Navigator/9.0.0.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.11pre) Gecko/20071206 Firefox/2.0.0.11 Navigator/9.0.0.5 
Netscape 9.0.0.4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.10pre) Gecko/20071127 Firefox/2.0.0.10 Navigator/9.0.0.4 
Netscape 9.0.0.3 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.8.1.9pre) Gecko/20071102 Firefox/2.0.0.9 Navigator/9.0.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9pre) Gecko/20071102 Firefox/2.0.0.9 Navigator/9.0.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr; rv:1.8.1.9pre) Gecko/20071102 Firefox/2.0.0.9 Navigator/9.0.0.3 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.9pre) Gecko/20071102 Firefox/2.0.0.9 Navigator/9.0.0.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.9pre) Gecko/20071102 Firefox/2.0.0.9 Navigator/9.0.0.3 
Netscape 9.0.0.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.8pre) Gecko/20071019 Firefox/2.0.0.8 Navigator/9.0.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.8pre) Gecko/20071019 Firefox/2.0.0.8 Navigator/9.0.0.1 
Mozilla/5.0 (Windows; U; Windows 98; en-US; rv:1.8.1.8pre) Gecko/20071019 Firefox/2.0.0.8 Navigator/9.0.0.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.8pre) Gecko/20071019 Firefox/2.0.0.8 Navigator/9.0.0.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.8pre) Gecko/20071019 Firefox/2.0.0.8 Navigator/9.0.0.1 
Netscape 9.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.8pre) Gecko/20071015 Firefox/2.0.0.7 Navigator/9.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20070321 Netscape/9.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.8pre) Gecko/20071015 Firefox/2.0.0.7 Navigator/9.0 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.8.1.8pre) Gecko/20071015 Firefox/2.0.0.7 Navigator/9.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.8pre) Gecko/20071015 Firefox/2.0.0.7 Navigator/9.0 
Netscape 8.1.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20070321 Netscape/8.1.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.7.5) Gecko/20070321 Netscape/8.1.3 
Netscape 8.1.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.7.5) Gecko/20060912 Netscape/8.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-AR; rv:1.7.5) Gecko/20060912 Netscape/8.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; es-AR; rv:1.7.5) Gecko/20060912 Netscape/8.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20060912 Netscape/8.1.2 
Netscape 8.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20060127 Netscape/8.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT; rv:1.7.5) Gecko/20060127 Netscape/8.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.7.5) Gecko/20060127 Netscape/8.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20060127 Netscape/8.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20060111 Netscape/8.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7.5) Gecko/20060127 Netscape/8.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20060127 Netscape/8.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.5) Gecko/20060127 Netscape/8.1 
Netscape 8.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20051012 Netscape/8.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20051012 Netscape/8.0.4 
Netscape 8.0.3.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20050817 Netscape/8.0.3.4 
Netscape 8.0.3.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20050729 Netscape/8.0.3.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20050729 Netscape/8.0.3.3 
Netscape 8.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-CA; rv:1.7.5) Gecko/20050610 Netscape/8.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20050603 Netscape/8.0.2 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.5) Gecko/20050603 Netscape/8.0.2 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.7.5) Gecko/20050603 Netscape/8.0.2 
Netscape 8.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20050519 Netscape/8.0.1 FirePHP/0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20050519 Netscape/8.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20050519 Netscape/8.0.1 
Netscape 7.20 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.2) Gecko/20050208 Netscape/7.20 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.2) Gecko/20040805 Netscape/7.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.2) Gecko/20040804 Netscape/7.2 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.2) Gecko/20040804 Netscape/7.2 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.7.2) Gecko/20040804 Netscape/7.2 (ax) 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.2) Gecko/20040804 Netscape/7.2 (ax) 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.7.2) Gecko/20040804 Netscape/7.2 (ax) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; rv:1.7.2) Gecko/20040804 Netscape/7.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.2) Gecko/20040804 Netscape/7.2 
Netscape 7.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-CA; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.4) Gecko/20030619 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.4) Gecko/20030619 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Win98; ja-JP; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.7.2) Gecko/20040804 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.4) Gecko Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.4) Gecko/20030619 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Win95; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax) 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:1.4) Gecko/20030619 Netscape/7.1 (ax) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 
Netscape 7.0b1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0rc2) Gecko/20020513 Netscape/7.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.0rc2) Gecko/20020512 Netscape/7.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0rc2) Gecko/20020618 Netscape/7.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0rc2) Gecko/20020512 Netscape/7.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0rc2) Gecko/20020512 Netscape/7.0b1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.0rc2) Gecko/20020512 Netscape/7.0b1 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.0rc2) Gecko/20020512 Netscape/7.0b1 
Netscape 7.02 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.0.2) Gecko/20030208 Netscape/7.02 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Win98; fr-FR; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Win95; de-DE; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Macintosh; U; PPC; ja-JP; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Macintosh; U; PPC; fr-FR; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Macintosh; U; PPC; de-DE; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-FR; rv:1.0.2) Gecko/20030208 Netscape/7.02 
Netscape 7.01 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; WinNT4.0; fr-FR; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; WinNT4.0; de-AT; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Windows NT 5.0; ja-JP; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Macintosh; U; PPC; fr-FR; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Macintosh; U; PPC; de-DE; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.0.2) Gecko/20021120 Netscape/7.01 
Netscape 7.0 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.0.1) Gecko/20020921 Netscape/7.0 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.0.1) Gecko/20020920 Netscape/7.0 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.0.1) Gecko/20020719 Netscape/7.0 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (X11; U; Linux i586; fr-FR; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (X11; U; HP-UX 9000/785; es-ES; rv:1.0.1) Gecko/20020827 Netscape/7.0 
Mozilla/5.0 (X11; U; AIX 0048013C4C00; en-US; rv:1.0.1) Gecko/20021009 Netscape/7.0 
Mozilla/5.0 (Windows; U; WinNT4.0; fr-FR; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; WinNT4.0; en-GB; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.1) Gecko/20020823 Netscape/7.0 (ax) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; pt-BR; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0.1) Gecko/20020823 Netscape/7.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-GB; rv:1.0.1) Gecko/20020823 Netscape/7.0

More Netscape 7.0 user agents strings –>>

Netscape 6.2.3 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:0.9.4.1) Gecko/20020518 Netscape6/6.2.3 
Mozilla/5.0 (X11; U; SunOS sun4u; de-DE; rv:0.9.4.1) Gecko/20020518 Netscape6/6.2.3 
Mozilla/5.0 (X11; U; OSF1 alpha; en-US; rv:0.9.4.1) Gecko/20020517 Netscape6/6.2.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; WinNT4.0; fr-FR; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja-JP; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; it-IT; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-GB; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Win98; fr-FR; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:0.9.4.1) Gecko/20020508 Netscape6/6.2.3

More Netscape 6.2.3 user agents strings –>>

Netscape 6.2.2 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:0.9.4.1) Gecko/20020406 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.0.1) Gecko/20020823 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:0.9.4.1) Gecko/20020318 Netscape6/6.2.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-FR; rv:0.9.4.1) Gecko/20020315 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:0.9.4.1) Gecko/20020314 Netscape6/6.2.2 
Netscape 6.2.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:0.9.4) Gecko/20011206 Netscape6/6.2.1 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:0.9.4) Gecko/20011126 Netscape6/6.2.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.4) Gecko/20011126 Netscape6/6.2.1 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:0.9.4) Gecko/20011126 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; WinNT4.0; fr-FR; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; WinNT4.0; en-CA; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Win98; fr-FR; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Win98; en-GB; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Win 9x 4.90; fr-FR; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1

More Netscape 6.2.1 user agents strings –>>

Netscape 6.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.4) Gecko/20011022 Netscape6/6.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Win98; fr-FR; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Win98; de-DE; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Win95; en-GB; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-GB; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:0.9.4) Gecko/20011019 Netscape6/6.2 
Netscape 6.1b1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:0.9.1) Gecko/20010607 Netscape6/6.1b1 
Netscape 6.1 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:0.9.2) Gecko/20011002 Netscape6/6.1 
Mozilla/5.0 (Windows; U; WinNT4.0; fr-FR; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; it-IT; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-GB; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-DE; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Win95; de-DE; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-DE; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Macintosh; U; PPC; de-DE; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; WinNT4.0; de-DE; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Mozilla/5.0 (Macintosh; U; PPC; de-DE; rv:0.9.2) Gecko/20010726 Netscape6/6.1 
Netscape 4.8C 
Mozilla/4.8C-SGI [en] (X11; U; IRIX64 6.5 IP27) 
Netscape 4.8 
Mozilla/4.8 [pl] (Windows NT 5.1; U) 
Mozilla/4.8 [nl] (Windows NT 6.0; U) 
Mozilla/4.8 [es] (Windows NT 5.1; U) 
Mozilla/4.8 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.8 [en] (X11; U; SunOS 5.8 sun4m; Nav) 
Mozilla/4.8 [en] (X11; U; Linux 2.6.12-1.1372_FC3 i686; Nav) 
Mozilla/4.8 [en] (X11; U; Linux 2.4.20-4GB-athlon i686) 
Mozilla/4.8 [en] (X11; U; IRIX64 6.5 IP27) 
Mozilla/4.8 [en] (X11; U; HP-UX B.11.00 9000/785) 
Mozilla/4.8 [en] (WinNT; U) 
Mozilla/4.8 [en] (Windows NT 6.0; U) Paros/3.2.13 
Mozilla/4.8 [en] (Windows NT 6.0; U) 
Mozilla/4.8 [en] (Windows NT 6.0; en-US; U) 
Mozilla/4.8 [en] (Windows NT 5.1; U) 
Mozilla/4.8 [en] (Windows NT 5.0; U) 
Mozilla/4.8 [en] (Win98; U) 
Mozilla/4.8 [en] (Linux; U) 
Mozilla/4.8 [en] (FreeBSD; U) 
Mozilla/4.8 [en-US] (Windows NT 6.0; U) 
Mozilla/4.8 [de] (X11; U; Linux 2.4.20-4GB i686)

More Netscape 4.8 user agents strings –>>

Netscape 4.7C 
Mozilla/4.7C-SGI [en] (X11; I; IRIX 6.5 IP32) 
Netscape 4.79C 
Mozilla/4.79C-SGI [en] (X11; I; IRIX64 6.5 IP30) 
Mozilla/4.79C-SGI [en] (X11; I; IRIX64 6.5 IP28) 
Netscape 4.79 
Mozilla/4.79 [fr] (X11; U; Linux 2.4.18-4 i686) 
Mozilla/4.79 [fr] (X11; U; Linux 2.4.18-27.7.xcustom i686) 
Mozilla/4.79 [fr] (X11; U; Linux 2.4.18-24.7.xcustom i686) 
Mozilla/4.79 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.79 [en] (X11; U; SunOS 5.7 sun4u) 
Mozilla/4.79 [en] (X11; U; SunOS 5.6 sun4u) 
Mozilla/4.79 [en] (X11; U; SunOS 5.10 i86pc) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.21-pre5 i686) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.20-4GB i586) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.2 i386) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.18-5smp i686) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.18-5 i686) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.18-27.7.xsmp i686) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.18-10 i686) 
Mozilla/4.79 [en] (X11; U; Linux 2.4.16-4GB-SMP i686) 
Mozilla/4.79 [en] (X11; U; Linux 2.2.19-6.2.16 i686) 
Mozilla/4.79 [en] (X11; U; Linux 2.2.12-32 i686) 
Mozilla/4.79 [en] (WinNT; U) 
Mozilla/4.79 [en] (Windows NT 5.0; U) 
Mozilla/4.79 [en] (Win98; U)

More Netscape 4.79 user agents strings –>>

Netscape 4.78 
Mozilla/4.78 [ja] (Windows NT 5.0; U) 
Mozilla/4.78 [fr] (X11; U; Linux 2.4.8-26mdk i686) 
Mozilla/4.78 [fr] (X11; U; Linux 2.4.7-10.2 i686) 
Mozilla/4.78 [fr] (X11; U; Linux 2.4.7-10 i686) 
Mozilla/4.78 [fr] (X11; U; Linux 2.4.18-14 i686) 
Mozilla/4.78 [fr] (Windows NT 5.0; U) 
Mozilla/4.78 [fr] (Win98; U) 
Mozilla/4.78 [fr] (Win95; U) 
Mozilla/4.78 [es] (Windows NT 5.0; U) 
Mozilla/4.78 [es] (Win98; U) 
Mozilla/4.78 [en] (X11; U; SunOS 5.9 sun4u) 
Mozilla/4.78 [en] (X11; U; SunOS 5.8 sun4u; Nav) 
Mozilla/4.78 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.78 [en] (X11; U; SunOS 5.7 sun4u) 
Mozilla/4.78 [en] (X11; U; Linux 2.4.9-34smp i686) 
Mozilla/4.78 [en] (X11; U; Linux 2.4.9-21 i686) 
Mozilla/4.78 [en] (X11; U; Linux 2.4.7-10 i686) 
Mozilla/4.78 [en] (X11; U; Linux 2.4.20-18.7 i686) 
Mozilla/4.78 [en] (X11; U; Linux 2.4.20 i686; Nav) 
Mozilla/4.78 [en] (X11; U; Linux 2.4.2 i386)

More Netscape 4.78 user agents strings –>>

Netscape 4.77C 
Mozilla/4.77C-SGI [en] (X11; I; IRIX64 6.5 IP30) 
Mozilla/4.77C-SGI [en] (X11; I; IRIX64 6.5 IP30) 
Netscape 4.77 
Mozilla/4.77 [fr] (X11; U; Linux 2.4.9-34 i686) 
Mozilla/4.77 [fr] (X11; U; Linux 2.4.4-4GB i686) 
Mozilla/4.77 [fr] (X11; U; Linux 2.4.3-20mdk i686) 
Mozilla/4.77 [fr] (X11; U; Linux 2.4.17 i686; Nav) 
Mozilla/4.77 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.77 [en] (X11; U; SunOS 5.7 sun4u) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.9-a22m i686) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.20-bf2.4 i686) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.2-2 i686) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.19-acheron i686; Nav) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.19 i686; Nav) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.18-386 i686) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.18-27.7.x i686) 
Mozilla/4.77 [en] (X11; U; Linux 2.4.17-lsm i686) 
Mozilla/4.77 [en] (X11; U; Linux 2.2.17 i586) 
Mozilla/4.77 [en] (X11; U; Linux 2.2.14 i686) 
Mozilla/4.77 [en] (X11; U; HP-UX B.11.00 9000/800) 
Mozilla/4.77 [en] (WinNT; U) 
Mozilla/4.77 [en] (Windows NT 5.0; U) 
Mozilla/4.77 [en] (Win98; U)

More Netscape 4.77 user agents strings –>>

Netscape 4.76C 
Mozilla/4.76C-SGI [en] (X11; I; IRIX64 6.5 IP30) 
Mozilla/4.76C-SGI [en] (X11; I; IRIX 6.5 IP32) 
Netscape 4.76 
Mozilla/4.76 [fr] (X11; U; Linux 2.4.2-2 i686) 
Mozilla/4.76 [en] (X11; U; SunOS 5.8 sun4u; Nav) 
Mozilla/4.76 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.76 [en] (X11; U; SunOS 5.8 i86pc) 
Mozilla/4.76 [en] (X11; U; Linux 2.4.9-34 i686) 
Mozilla/4.76 [en] (X11; U; Linux 2.4.5 i686) 
Mozilla/4.76 [en] (X11; U; Linux 2.4.20 i686) 
Mozilla/4.76 [en] (X11; U; Linux 2.4.18p3 i686) 
Mozilla/4.76 [en] (X11; U; Linux 2.4.0 i686) 
Mozilla/4.76 [en] (X11; U; Linux 2.2.19pre17 i686) 
Mozilla/4.76 [en] (X11; U; Linux 2.2.16-22 i686) 
Mozilla/4.76 [en] (X11; U; Linux 2.2.16 i686) 
Mozilla/4.76 [en] (X11; U; HP-UX B.10.20 9000/782) 
Mozilla/4.76 [en] (WinNT; U) 
Mozilla/4.76 [en] (Win98; U) 
Mozilla/4.76 [en] (Win95; U) 
Mozilla/4.76 [de] (X11; U; Linux 2.4.4-4GB i686; Nav) 
Mozilla/4.76 [de] (X11; U; Linux 2.4.0-4GB i686) 
Mozilla/4.76 [de] (X11; U; Linux 2.2.18 i686) 
Mozilla/4.76 (X11; U; Linux 2.4.10-4GB i686)

More Netscape 4.76 user agents strings –>>

Netscape 4.75 
Mozilla/4.75 [pl] (X11; U; Linux 2.2.17-21mdk i686) 
Mozilla/4.75 [fr] (X11; U; Linux 2.2.16-3smp i686) 
Mozilla/4.75 [fr] (X11; U; Linux 2.2.16-22 i686) 
Mozilla/4.75 [fr] (WinNT; U) 
Mozilla/4.75 [fr] (Windows NT 5.0; U) 
Mozilla/4.75 [fr] (Win98; U) 
Mozilla/4.75 [fr] (Win95; U) 
Mozilla/4.75 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.75 [en] (X11; U; SunOS 5.7 sun4u) 
Mozilla/4.75 [en] (X11; U; SunOS 5.6 sun4u) 
Mozilla/4.75 [en] (X11; U; OpenBSD 2.8 i386) 
Mozilla/4.75 [en] (X11; U; Linux 2.2.16-3 i686) 
Mozilla/4.75 [en] (X11; U; Linux 2.2.12-20 i586) 
Mozilla/4.75 [en] (WinNT; U) 
Mozilla/4.75 [en] (Windows NT 5.0; U) 
Mozilla/4.75 [en] (Win98; U) 
Mozilla/4.75 [en] (Win95; U) 
Mozilla/4.75 [de] (WinNT; U) 
Mozilla/4.75 [de] (Windows NT 5.0; U) 
Mozilla/4.75 [de] (Win98; U)

More Netscape 4.75 user agents strings –>>

Netscape 4.74 
Mozilla/4.74 [en] (X11; U; Linux 2.2.16 i686) 
Mozilla/4.74 [en] (WinNT; U) 
Mozilla/4.74 [en] (Windows NT 5.0; U) 
Mozilla/4.74 [en] (Win98; U) 
Mozilla/4.74 [en] (Win95; U) 
Mozilla/4.74 [de] (X11; U; Linux 2.2.16 i686) 
Mozilla/4.74 [de] (X11; U; Linux 2.2.16 i586) 
Mozilla/4.74 (Macintosh; U; PPC) 
Mozilla/4.74 (Macintosh; U; PPC) 
Netscape 4.73 
Mozilla/4.73 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.73 [en] (X11; I; HP-UX B.10.20 9000/879) 
Mozilla/4.73 [en] (WinNT; U) 
Mozilla/4.73 [en] (WinNT; I) 
Mozilla/4.73 [en] (Windows NT 5.0; U) 
Mozilla/4.73 [en] (Windows NT 5.0; I) 
Mozilla/4.73 [en] (Win98; U) 
Mozilla/4.73 [en] (Win98; I) 
Mozilla/4.73 [en] (Win95; U) 
Mozilla/4.73 [en] (Win95; I) 
Mozilla/4.73 [de] (WinNT; U) 
Mozilla/4.73 [de] (Windows NT 5.0; U) 
Mozilla/4.73 [de] (Win98; U) 
Mozilla/4.73 [de] (Win95; U) 
Mozilla/4.73 (Macintosh; U; PPC) 
Mozilla/4.73 (Macintosh; I; PPC) 
Mozilla/4.73 [en] (Win95; I) 
Mozilla/4.73 [de] (Win98; U) 
Netscape 4.72 
Mozilla/4.72 [fr] (X11; U; Linux 2.2.14-5.0 i686) 
Mozilla/4.72 [en] (X11; U; Linux 2.2.20 i586; Nav) 
Mozilla/4.72 [en] (X11; U; Linux 2.2.14-5.0 i686) 
Mozilla/4.72 [en] (X11; I; SunOS 5.7 sun4m) 
Mozilla/4.72 [en] (X11; I; Linux 2.2.14 i686) 
Mozilla/4.72 [en] (X11; I; Linux 2.2.14 i586) 
Mozilla/4.72 [en] (X11; I; Linux 2.2.13 i586) 
Mozilla/4.72 [en] (X11; I; HP-UX B.11.00 9000/800) 
Mozilla/4.72 [en] (WinNT; U) 
Mozilla/4.72 [en] (WinNT; I) 
Mozilla/4.72 [en] (Windows NT 5.0; U) 
Mozilla/4.72 [en] (Windows NT 5.0; I) 
Mozilla/4.72 [en] (Win98;I) 
Mozilla/4.72 [en] (Win98; U) 
Mozilla/4.72 [en] (Win98; I) 
Mozilla/4.72 [en] (Win95; I) 
Mozilla/4.72 [de] (WinNT; U) 
Mozilla/4.72 [de] (Windows NT 5.0; U) 
Mozilla/4.72 [de] (Win95; U) 
Mozilla/4.72 (Macintosh; U; PPC)

More Netscape 4.72 user agents strings –>>

Netscape 4.71 
Mozilla/4.71 [en] (X11; U; Linux 2.0.36 i586) 
Mozilla/4.71 [en] (WinNT; I) 
Mozilla/4.71 [en] (Win98; I) 
Netscape 4.7 
Mozilla/4.7 [fr] (WinNT; I) 
Mozilla/4.7 [fr] (Win98; U) 
Mozilla/4.7 [fr] (Win98; I) 
Mozilla/4.7 [fr] (Win95; I) 
Mozilla/4.7 [en] (X11; U; SunOS 5.6 sun4u) 
Mozilla/4.7 [en] (X11; I; SunOS 5.8 sun4u) 
Mozilla/4.7 [en] (X11; I; SunOS 5.7 sun4u) 
Mozilla/4.7 [en] (X11; I; SunOS 5.6 sun4u) 
Mozilla/4.7 [en] (X11; I; Linux 2.2.13 i686; Nav) 
Mozilla/4.7 [en] (X11; I; Linux 2.2.13 i586) 
Mozilla/4.7 [en] (X11; I; Linux 2.2.12 i686; Nav) 
Mozilla/4.7 [en] (WinNT; U) 
Mozilla/4.7 [en] (WinNT; I) 
Mozilla/4.7 [en] (Windows NT 6.0; U) 
Mozilla/4.7 [en] (Win98; I) 
Mozilla/4.7 [en] (Win95; I) 
Mozilla/4.7 [en-gb] (WinNT; U) 
Mozilla/4.7 [en-gb] (WinNT; I) 
Mozilla/4.7 [en-gb] (Win98; U) 
Mozilla/4.7 [de] (WinNT; U)

More Netscape 4.7 user agents strings –>>

Netscape 4.61 
Mozilla/4.61 [ja] (X11; I; Linux 2.6.13-33cmc1 i686) 
Mozilla/4.61 [fi] (OS/2; I) 
Mozilla/4.61 [en] (X11; I; SunOS 5.6 sun4u) 
Mozilla/4.61 [en] (X11; I; Linux 2.2.12-20 i686; Nav) 
Mozilla/4.61 [en] (WinNT; I) 
Mozilla/4.61 [en] (Win98; I) 
Mozilla/4.61 [en] (Win95; I) 
Mozilla/4.61 [en] (OS/2; U) 
Mozilla/4.61 [en] (OS/2; I) 
Mozilla/4.61 [de] (OS/2; U) 
Mozilla/4.61 [de] (OS/2; I) 
Mozilla/4.61 (Macintosh; I; PPC) 
Netscape 4.6 
Mozilla/4.6 [fr] (WinNT; I) 
Mozilla/4.6 [fr] (Win95; I) 
Mozilla/4.6 [en] (X11; U; SunOS 5.8 sun4u) 
Mozilla/4.6 [en] (X11; I; SunOS 5.8 sun4u) 
Mozilla/4.6 [en] (X11; I; SunOS 5.5.1 sun4u; Nav) 
Mozilla/4.6 [en] (WinNT; I) 
Mozilla/4.6 [en] (Win98; I) 
Mozilla/4.6 [en] (Win95; I) 
Mozilla/4.6 [de] (WinNT; I) 
Mozilla/4.6 [de] (Win98; I) 
Mozilla/4.6 [de] (Win95; I) 
Mozilla/4.6 (Macintosh; U; PPC) 
Mozilla/4.6 (Macintosh; I; PPC) 
Mozilla/4.6 [de] (Win98; I) 
Netscape 4.51 
Mozilla/4.51 [it] (Win98; U) 
Mozilla/4.51 [fr] (Win95; I) 
Mozilla/4.51 [en] (X11; I; Linux 2.2.7 i686) 
Mozilla/4.51 [en] (X11; I; Linux 2.2.5 i686) 
Mozilla/4.51 [en] (WinNT; I) 
Mozilla/4.51 [en] (Win98; U) 
Mozilla/4.51 [en] (Win95; I) 
Mozilla/4.51 [de] (WinNT; I) 
Mozilla/4.51 [de] (Win98; I) 
Mozilla/4.51 [de] (Win95; I) 
Mozilla/4.51 (Macintosh; I; PPC) 
Mozilla/4.51 [de] (WinNT; I) 
Netscape 4.5 
Mozilla/4.5 [it] (Win98; I) 
Mozilla/4.5 [fr] (Win98; I) 
Mozilla/4.5 [fr] (Win95; I) 
Mozilla/4.5 [fr] (Macintosh; U; PPC) 
Mozilla/4.5 [fr] (Macintosh; I; PPC) 
Mozilla/4.5 [es] (Win98; I) 
Mozilla/4.5 [en] (X11; I; SunOS 5.8 sun4u) 
Mozilla/4.5 [en] (X11; I; SunOS 5.7 sun4u) 
Mozilla/4.5 [en] (X11; I; SunOS 5.6 sun4u) 
Mozilla/4.5 [en] (X11; I; Linux 2.2.16 i586) 
Mozilla/4.5 [en] (WinNT; U) 
Mozilla/4.5 [en] (Win98; I) 
Mozilla/4.5 [en] (Win95; I) 
Mozilla/4.5 [de] (WinNT; I) 
Mozilla/4.5 [de] (Win98; I) 
Mozilla/4.5 [de] (Macintosh; I; PPC) 
Mozilla/4.5 (Macintosh; U; PPC) 
Mozilla/4.5 [fr] (Macintosh; U; PPC) 
Mozilla/4.5 [en] (WinNT; I) 
Netscape 4.41 
Mozilla/4.41 (BEOS; U ;Nav) 
Netscape 4.08 
Mozilla/4.08 [en] (WinNT; U ;Nav) 
Mozilla/4.08 [en] (WinNT; I ;Nav) 
Mozilla/4.08 [en] (Win98; I ;Nav) 
Mozilla/4.08 [en] (Win95; I ;Nav) 
Mozilla/4.08 (Macintosh; I; PPC, Nav) 
Mozilla/4.08 [de] (WinNT; I) 
Netscape 4.07 
Mozilla/4.07 [en] (X11; I; Linux 2.0.36 i586) 
Mozilla/4.07 [en] (WinNT; U ;Nav) 
Mozilla/4.07 [en] (WinNT; I) 
Mozilla/4.07 [de] (Win98; I) 
Mozilla/4.07 [de] (Win95; I) 
Mozilla/4.07 [fr] (Win95; I) 
Mozilla/4.07 [en] (X11; I; Linux 2.0.36 i586) 
Mozilla/4.07 [en] (WinNT; U ;Nav) 
Netscape 4.06 
Mozilla/4.06 [hu] (Win98; I) 
Mozilla/4.06 [en] (X11; U; Linux 2.0.27 i586) 
Mozilla/4.06 [en] (X11; I; Linux 2.0.35 i686) 
Mozilla/4.06 [en] (WinNT; I) 
Mozilla/4.06 [en] (WinNT; I ;Nav) 
Mozilla/4.06 [de] (WinNT; I) 
Mozilla/4.06 [de] (Win98; I) 
Mozilla/4.06 (Win95; I) 
Mozilla/4.06 (Win95; I) 
Netscape 4.05 
Mozilla/4.05 [en] (X11; I; Linux 2.0.33 i586) 
Mozilla/4.05 [en] (Win95; I) 
Mozilla/4.05 [de] (Win95; I) 
Netscape 4.04 
Mozilla/4.04 [fr] (Macintosh; I; PPC, Nav) 
Mozilla/4.04 [en] (X11; I; IRIX 5.3 IP22) 
Mozilla/4.04 [en] (WinNT; U) 
Mozilla/4.04 [en] (WinNT; I) 
Mozilla/4.04 [en] (Win95; I ;Nav) 
Mozilla/4.04 [de] (WinNT; I ;Nav) 
Mozilla/4.04 [en] (Win95; I ;Nav) 
Netscape 4.03 
Mozilla/4.03 [fr] (Win95; U) 
Mozilla/4.03 [fr] (Win95; U) 
Netscape 4.01 
Mozilla/4.01 [en] (Win95; I) 
Mozilla/4.01 [de] (WinNT; I) 
Netscape 4.0 
Mozilla/4.0 (compatible; Windows NT 5.1; U; en) 
Mozilla/4.0 (compatible; Mozilla/5.0 ; Linux i686) 
Netscape 3.04Gold 
Mozilla/3.04Gold (WinNT; U) 
Mozilla/3.04Gold (Macintosh; I; PPC) 
Netscape 3.04 
Mozilla/3.04 (WinNT; I) 
Netscape 3.02 
Mozilla/3.02 [en] (Windows NT 5.1; U) 
Netscape 3.01Gold 
Mozilla/3.01Gold (X11; I; SunOS 5.5.1 sun4m) 
Mozilla/3.01Gold (Macintosh; U; 68K) . 
Mozilla/3.01Gold (Macintosh; I; 68K) 
Netscape 3.01 
Mozilla/3.01 [de] (Win95; I) 
Mozilla/3.01 (Macintosh; U; PPC) 
Netscape 3.0 
Mozilla/3.0 (X11; I; AIX 2) 
Mozilla/3.0 (Win95; I) 
Mozilla/3.0 (Macintosh; U; PPC Mac OS X; pl-PL) 
Mozilla/3.0 (Macintosh; I; PPC) 
Mozilla/3.0 (Macintosh; I; 68K) 
Netscape 2.02 
Mozilla/2.02 [fr] (WinNT; I) 
NetSurf

Click on any string to get more details

NetSurf 2.0 
NetSurf/2.0 (RISC OS; armv5l) 
NetSurf/2.0 (RISC OS; armv3l) 
NetSurf/2.0 (Linux; i686) 
NetSurf 1.2 
NetSurf/1.2 (RISC OS; armv4l) 
NetSurf/1.2 (NetBSD; i386; NetBSD 4.99.59 i386) 
NetSurf/1.2 (Linux; x86_64) 
NetSurf/1.2 (Linux; i686) 
NetSurf 1.1 
NetSurf/1.1 (Linux; i686) 
NetSurf 1.0 
NetSurf/1.0 (Linux; i686) 
OmniWeb

Click on any string to get more details

OmniWeb v622.8.0.112941 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US) AppleWebKit/528.16 (KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0.112941 
OmniWeb v622.8.0.112916 
Mozilla/5.0 (Macintosh; U; Intel 80486Mac OS X; en-US) AppleWebKit/528.16 (KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0.112916 
OmniWeb v622.8.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/530.18+(KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/528.16+(KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-US) AppleWebKit/528.16 (KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-US) AppleWebKit/528.16 (KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0 
OmniWeb v622.6.1.0.111015 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US) AppleWebKit/525.18 (KHTML, like Gecko, Safari/525.20) OmniWeb/v622.6.1.0.111015 
OmniWeb v622.11.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-US) AppleWebKit/531.21.8+(KHTML, like Gecko, Safari/528.16) OmniWeb/v622.11.0 
OmniWeb v622.10.0 
Mozilla/5.0 (Macintosh; U; PowerPC Mac OS X 10_5_8; en-US) AppleWebKit/531.9+(KHTML, like Gecko, Safari/528.16) OmniWeb/v622.10.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-US) AppleWebKit/531.9+(KHTML, like Gecko, Safari/528.16) OmniWeb/v622.10.0 
OmniWeb v605 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/420+ (KHTML, like Gecko, Safari/420) OmniWeb/v605 
OmniWeb v603 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/420+ (KHTML, like Gecko, Safari/420) OmniWeb/v603 
OmniWeb v602 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/420+ (KHTML, like Gecko, Safari/420) OmniWeb/v602 
OmniWeb v601 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/420+ (KHTML, like Gecko, Safari/420) OmniWeb/v601 
OmniWeb v595 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/420+ (KHTML, like Gecko, Safari) OmniWeb/v595 
OmniWeb v563.66 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/125.4 (KHTML, like Gecko, Safari) OmniWeb/v563.66 
OmniWeb v563.60 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/125.4 (KHTML, like Gecko, Safari) OmniWeb/v563.60 
OmniWeb v563.59 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/125.4 (KHTML, like Gecko, Safari) OmniWeb/v563.59 
OmniWeb v563.57 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/125.4 (KHTML, like Gecko, Safari) OmniWeb/v563.57 
OmniWeb v563.15 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-IT) AppleWebKit/125.4 (KHTML, like Gecko, Safari) OmniWeb/v563.15 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/125.4 (KHTML, like Gecko, Safari) OmniWeb/v563.15 
OmniWeb v558.46 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-DE) AppleWebKit/85 (KHTML, like Gecko) OmniWeb/v558.46 
OmniWeb v496 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US) AppleWebKit/85 (KHTML, like Gecko) OmniWeb/v496 
OmniWeb 4.2.1-v435.9 
Mozilla/4.5 (compatible; OmniWeb/4.2.1-v435.9; Mac_PowerPC) 
OmniWeb 4.2-v435.5 
Mozilla/4.5 (compatible; OmniWeb/4.2-v435.5; Mac_PowerPC) 
OmniWeb 4.1.1-v424.6 
Mozilla/4.5 (compatible; OmniWeb/4.1.1-v424.6; Mac_PowerPC) 
Mozilla/4.5 (compatible; OmniWeb/4.1.1-v424.6; Mac_PowerPC) 
OmniWeb 4.1-v422 
Mozilla/4.5 (compatible; OmniWeb/4.1-v422; Mac_PowerPC) 
OmniWeb 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/522+ (KHTML, like Gecko) OmniWeb 
Opera

Click on any string to get more details

Opera 9.99 
Opera/9.99 (Windows NT 5.1; U; pl) Presto/9.9.9 
Opera 9.80 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/886; U; en) Presto/2.4.15 
Opera 9.70 
Opera/9.70 (Linux ppc64 ; U; en) Presto/2.2.1 
Opera/9.70 (Linux i686 ; U; zh-cn) Presto/2.2.0 
Opera/9.70 (Linux i686 ; U; en-us) Presto/2.2.0 
Opera/9.70 (Linux i686 ; U; en) Presto/2.2.1 
Opera/9.70 (Linux i686 ; U; en) Presto/2.2.0 
Opera/9.70 (Linux i686 ; U; ; en) Presto/2.2.1 
Opera/9.70 (Linux i686 ; U; ; en) Presto/2.2.1 
Mozilla/5.0 (Linux i686 ; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.70 
Mozilla/4.0 (compatible; MSIE 6.0; Linux i686 ; en) Opera 9.70 
Opera 9.7 (Windows NT 5.2; U; en) 
Opera 9.64 
Opera/9.64(Windows NT 5.1; U; en) Presto/2.1.1 
Opera/9.64 (X11; Linux x86_64; U; pl) Presto/2.1.1 
Opera/9.64 (X11; Linux x86_64; U; hr) Presto/2.1.1 
Opera/9.64 (X11; Linux x86_64; U; en-GB) Presto/2.1.1 
Opera/9.64 (X11; Linux x86_64; U; en) Presto/2.1.1 
Opera/9.64 (X11; Linux x86_64; U; de) Presto/2.1.1 
Opera/9.64 (X11; Linux x86_64; U; cs) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; tr) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; sv) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; pl) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; nb) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; Linux Mint; nb) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; Linux Mint; it) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; en) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; de) Presto/2.1.1 
Opera/9.64 (X11; Linux i686; U; da) Presto/2.1.1 
Opera/9.64 (Windows NT 6.1; U; MRA 5.5 (build 02842); ru) Presto/2.1.1 
Opera/9.64 (Windows NT 6.1; U; de) Presto/2.1.1 
Opera/9.64 (Windows NT 6.0; U; zh-cn) Presto/2.1.1 
Opera/9.64 (Windows NT 6.0; U; pl) Presto/2.1.1

More Opera 9.64 user agents strings –>>

Opera 9.63 
Opera/9.63 (X11; Linux x86_64; U; ru) Presto/2.1.1 
Opera/9.63 (X11; Linux x86_64; U; cs) Presto/2.1.1 
Opera/9.63 (X11; Linux i686; U; ru) Presto/2.1.1 
Opera/9.63 (X11; Linux i686; U; ru) 
Opera/9.63 (X11; Linux i686; U; nb) Presto/2.1.1 
Opera/9.63 (X11; Linux i686; U; en) 
Opera/9.63 (X11; Linux i686; U; de) Presto/2.1.1 
Opera/9.63 (X11; Linux i686) 
Opera/9.63 (X11; FreeBSD 7.1-RELEASE i386; U; en) Presto/2.1.1 
Opera/9.63 (Windows NT 6.1; U; hu) Presto/2.1.1 
Opera/9.63 (Windows NT 6.1; U; en) Presto/2.1.1 
Opera/9.63 (Windows NT 6.1; U; de) Presto/2.1.1 
Opera/9.63 (Windows NT 6.0; U; pl) Presto/2.1.1 
Opera/9.63 (Windows NT 6.0; U; nb) Presto/2.1.1 
Opera/9.63 (Windows NT 6.0; U; fr) Presto/2.1.1 
Opera/9.63 (Windows NT 6.0; U; en) Presto/2.1.1 
Opera/9.63 (Windows NT 6.0; U; cs) Presto/2.1.1 
Opera/9.63 (Windows NT 5.2; U; en) Presto/2.1.1 
Opera/9.63 (Windows NT 5.2; U; de) Presto/2.1.1 
Opera/9.63 (Windows NT 5.1; U; pt-BR) Presto/2.1.1

More Opera 9.63 user agents strings –>>

Opera 9.62 
Opera/9.62 (X11; Linux x86_64; U; ru) Presto/2.1.1 
Opera/9.62 (X11; Linux i686; U; pt-BR) Presto/2.1.1 
Opera/9.62 (X11; Linux i686; U; Linux Mint; en) Presto/2.1.1 
Opera/9.62 (X11; Linux i686; U; it) Presto/2.1.1 
Opera/9.62 (X11; Linux i686; U; fi) Presto/2.1.1 
Opera/9.62 (X11; Linux i686; U; en) Presto/2.1.1 
Opera/9.62 (Windows NT 6.1; U; en) Presto/2.1.1 
Opera/9.62 (Windows NT 6.0; U; pl) Presto/2.1.1 
Opera/9.62 (Windows NT 6.0; U; nb) Presto/2.1.1 
Opera/9.62 (Windows NT 6.0; U; en-GB) Presto/2.1.1 
Opera/9.62 (Windows NT 6.0; U; en) Presto/2.1.1 
Opera/9.62 (Windows NT 6.0; U; de) Presto/2.1.1 
Opera/9.62 (Windows NT 5.2; U; en) Presto/2.1.1 
Opera/9.62 (Windows NT 5.1; U; zh-tw) Presto/2.1.1 
Opera/9.62 (Windows NT 5.1; U; zh-cn) Presto/2.1.1 
Opera/9.62 (Windows NT 5.1; U; tr) Presto/2.1.1 
Opera/9.62 (Windows NT 5.1; U; ru) Presto/2.1.1 
Opera/9.62 (Windows NT 5.1; U; pt-BR) Presto/2.1.1 
Opera/9.62 (Windows NT 5.1; U; pl) Presto/2.1.1 
Opera/9.62 (Windows NT 5.1; U; nn) Presto/2.1.1

More Opera 9.62 user agents strings –>>

Opera 9.61 
Opera/9.61 (X11; Linux x86_64; U; fr) Presto/2.1.1 
Opera/9.61 (X11; Linux i686; U; ru) Presto/2.1.1 
Opera/9.61 (X11; Linux i686; U; pl) Presto/2.1.1 
Opera/9.61 (X11; Linux i686; U; en) Presto/2.1.1 
Opera/9.61 (X11; Linux i686; U; de) Presto/2.1.1 
Opera/9.61 (Windows NT 6.0; U; ru) Presto/2.1.1 
Opera/9.61 (Windows NT 6.0; U; pt-BR) Presto/2.1.1 
Opera/9.61 (Windows NT 6.0; U; http://lucideer.com; en-GB) Presto/2.1.1 
Opera/9.61 (Windows NT 6.0; U; en) Presto/2.1.1 
Opera/9.61 (Windows NT 5.2; U; en) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; zh-tw) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; zh-cn) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; ru) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; fr) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; en-GB) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; en) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; de) Presto/2.1.1 
Opera/9.61 (Windows NT 5.1; U; cs) Presto/2.1.1 
Opera/9.61 (Macintosh; Intel Mac OS X; U; de) Presto/2.1.1 
Mozilla/5.0 (Windows NT 5.1; U; en-GB; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.61 
Opera 9.60 
Opera/9.60 (X11; Linux x86_64; U) 
Opera/9.60 (X11; Linux i686; U; ru) Presto/2.1.1 
Opera/9.60 (X11; Linux i686; U; en-GB) Presto/2.1.1 
Opera/9.60 (Windows NT 6.0; U; uk) Presto/2.1.1 
Opera/9.60 (Windows NT 6.0; U; ru) Presto/2.1.1 
Opera/9.60 (Windows NT 6.0; U; pl) Presto/2.1.1 
Opera/9.60 (Windows NT 6.0; U; de) Presto/2.1.1 
Opera/9.60 (Windows NT 6.0; U; bg) Presto/2.1.1 
Opera/9.60 (Windows NT 5.1; U; tr) Presto/2.1.1 
Opera/9.60 (Windows NT 5.1; U; sv) Presto/2.1.1 
Opera/9.60 (Windows NT 5.1; U; es-ES) Presto/2.1.1 
Opera/9.60 (Windows NT 5.1; U; en-GB) Presto/2.1.1 
Opera/9.60 (Windows NT 5.0; U; en) Presto/2.1.1 
Mozilla/5.0 (X11; Linux x86_64; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.60 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux x86_64; en) Opera 9.60 
Opera 9.52 
Opera/9.52 (X11; Linux x86_64; U; ru) 
Opera/9.52 (X11; Linux x86_64; U; en) 
Opera/9.52 (X11; Linux x86_64; U) 
Opera/9.52 (X11; Linux ppc; U; de) 
Opera/9.52 (X11; Linux i686; U; fr) 
Opera/9.52 (X11; Linux i686; U; en) 
Opera/9.52 (X11; Linux i686; U; cs) 
Opera/9.52 (Windows NT 6.0; U; Opera/9.52 (X11; Linux x86_64; U); en) 
Opera/9.52 (Windows NT 6.0; U; fr) 
Opera/9.52 (Windows NT 6.0; U; en) 
Opera/9.52 (Windows NT 6.0; U; de) 
Opera/9.52 (Windows NT 5.2; U; ru) 
Opera/9.52 (Windows NT 5.0; U; en) 
Opera/9.52 (Macintosh; PPC Mac OS X; U; ja) 
Opera/9.52 (Macintosh; PPC Mac OS X; U; fr) 
Opera/9.52 (Macintosh; Intel Mac OS X; U; pt-BR) 
Opera/9.52 (Macintosh; Intel Mac OS X; U; pt) 
Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.52 
Mozilla/5.0 (Windows NT 5.1; U; ; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.52 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 9.52 
Opera 9.51 
Opera/9.51 (X11; Linux i686; U; Linux Mint; en) 
Opera/9.51 (X11; Linux i686; U; fr) 
Opera/9.51 (X11; Linux i686; U; de) 
Opera/9.51 (Windows NT 6.0; U; sv) 
Opera/9.51 (Windows NT 6.0; U; es) 
Opera/9.51 (Windows NT 6.0; U; en) 
Opera/9.51 (Windows NT 5.2; U; en) 
Opera/9.51 (Windows NT 5.1; U; nn) 
Opera/9.51 (Windows NT 5.1; U; fr) 
Opera/9.51 (Windows NT 5.1; U; es-LA) 
Opera/9.51 (Windows NT 5.1; U; es-AR) 
Opera/9.51 (Windows NT 5.1; U; en-GB) 
Opera/9.51 (Windows NT 5.1; U; en) 
Opera/9.51 (Windows NT 5.1; U; da) 
Opera/9.51 (Macintosh; Intel Mac OS X; U; en) 
Mozilla/5.0 (X11; Linux i686; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.51 
Mozilla/5.0 (Windows NT 6.0; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.51 
Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.51 
Mozilla/5.0 (Windows NT 5.1; U; en-GB; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.51 
Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.51

More Opera 9.51 user agents strings –>>

Opera 9.50 
Opera/9.50 (X11; Linux x86_64; U; pl) 
Opera/9.50 (X11; Linux x86_64; U; nb) 
Opera/9.50 (X11; Linux ppc; U; en) 
Opera/9.50 (X11; Linux i686; U; es-ES) 
Opera/9.50 (Windows NT 5.2; U; it) 
Opera/9.50 (Windows NT 5.1; U; ru) 
Opera/9.50 (Windows NT 5.1; U; nn) 
Opera/9.50 (Windows NT 5.1; U; nl) 
Opera/9.50 (Windows NT 5.1; U; it) 
Opera/9.50 (Windows NT 5.1; U; es-ES) 
Opera/9.50 (Macintosh; Intel Mac OS X; U; en) 
Opera/9.50 (Macintosh; Intel Mac OS X; U; de) 
Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.50 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux x86_64; en) Opera 9.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.0; en) Opera 9.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; en) Opera 9.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; de) Opera 9.50 
Opera/9.5 (Windows NT 6.0; U; en) 
Opera/9.5 (Windows NT 5.1; U; fr) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9b3) Gecko/2008020514 Opera 9.5 
Opera 9.4 
Opera 9.4 (Windows NT 6.1; U; en) 
Opera 9.4 (Windows NT 5.3; U; en) 
Opera 9.30 
Opera/9.30 (Nintendo Wii; U; ; 2071; Wii Shop Channel/1.0; en) 
Opera/9.30 (Nintendo Wii; U; ; 2047-7;en) 
Opera/9.30 (Nintendo Wii; U; ; 2047-7; fr) 
Opera/9.30 (Nintendo Wii; U; ; 2047-7; de) 
Opera 9.27 
Opera/9.27 (X11; Linux i686; U; fr) 
Opera/9.27 (X11; Linux i686; U; en) 
Opera/9.27 (Windows NT 5.2; U; en) 
Opera/9.27 (Windows NT 5.1; U; ja) 
Opera/9.27 (Macintosh; Intel Mac OS X; U; sv) 
Mozilla/5.0 (Windows NT 5.2; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 Opera 9.27 
Mozilla/5.0 (Windows NT 5.1; U; es-la; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 Opera 9.27 
Mozilla/5.0 (Macintosh; Intel Mac OS X; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 Opera 9.27 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; en) Opera 9.27 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; en) Opera 9.27 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; es-la) Opera 9.27 
Opera 9.26 
Opera/9.26 (Windows NT 5.1; U; zh-cn) 
Opera/9.26 (Windows NT 5.1; U; pl) 
Opera/9.26 (Windows NT 5.1; U; nl) 
Opera/9.26 (Windows NT 5.1; U; MEGAUPLOAD 2.0; en) 
Opera/9.26 (Windows NT 5.1; U; de) 
Opera/9.26 (Macintosh; PPC Mac OS X; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 Opera 9.26 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.0; en) Opera 9.26 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 9.26 
Opera 9.25 
Opera/9.25 (X11; Linux i686; U; fr-ca) 
Opera/9.25 (X11; Linux i686; U; fr) 
Opera/9.25 (X11; Linux i686; U; en) 
Opera/9.25 (Windows NT 6.0; U; SV1; MEGAUPLOAD 2.0; ru) 
Opera/9.25 (Windows NT 6.0; U; sv) 
Opera/9.25 (Windows NT 6.0; U; ru) 
Opera/9.25 (Windows NT 6.0; U; MEGAUPLOAD 1.0; ru) 
Opera/9.25 (Windows NT 6.0; U; en-US) 
Opera/9.25 (Windows NT 5.2; U; en) 
Opera/9.25 (Windows NT 5.1; U; zh-cn) 
Opera/9.25 (Windows NT 5.1; U; ru) 
Opera/9.25 (Windows NT 5.1; U; MEGAUPLOAD 1.0; pt-br) 
Opera/9.25 (Windows NT 5.1; U; lt) 
Opera/9.25 (Windows NT 5.1; U; de) 
Opera/9.25 (Windows NT 5.0; U; en) 
Opera/9.25 (Windows NT 5.0; U; cs) 
Opera/9.25 (Windows NT 4.0; U; en) 
Opera/9.25 (OpenSolaris; U; en) 
Opera/9.25 (Macintosh; PPC Mac OS X; U; en) 
Opera/9.25 (Macintosh; Intel Mac OS X; U; en)

More Opera 9.25 user agents strings –>>

Opera 9.24 
Opera/9.24 (X11; SunOS i86pc; U; en) 
Opera/9.24 (X11; Linux i686; U; de) 
Opera/9.24 (Windows NT 5.1; U; tr) 
Opera/9.24 (Windows NT 5.1; U; ru) 
Opera/9.24 (Windows NT 5.0; U; ru) 
Opera/9.24 (Macintosh; PPC Mac OS X; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 Opera 9.24 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 9.24 
Mozilla/4.0 (compatible; MSIE 6.0; Mac_PowerPC; en) Opera 9.24 
Opera 9.23 
Opera/9.23 (X11; Linux x86_64; U; en) 
Opera/9.23 (X11; Linux i686; U; es-es) 
Opera/9.23 (X11; Linux i686; U; en) 
Opera/9.23 (Windows NT 6.0; U; de) 
Opera/9.23 (Windows NT 5.1; U; zh-cn) 
Opera/9.23 (Windows NT 5.1; U; SV1; MEGAUPLOAD 1.0; ru) 
Opera/9.23 (Windows NT 5.1; U; pt) 
Opera/9.23 (Windows NT 5.1; U; ja) 
Opera/9.23 (Windows NT 5.1; U; it) 
Opera/9.23 (Windows NT 5.1; U; fi) 
Opera/9.23 (Windows NT 5.1; U; en) 
Opera/9.23 (Windows NT 5.1; U; de) 
Opera/9.23 (Windows NT 5.1; U; da) 
Opera/9.23 (Windows NT 5.0; U; en) 
Opera/9.23 (Windows NT 5.0; U; de) 
Opera/9.23 (Nintendo Wii; U; ; 1038-58; Wii Internet Channel/1.0; en) 
Opera/9.23 (Macintosh; Intel Mac OS X; U; ja) 
Opera/9.23 (Mac OS X; ru) 
Opera/9.23 (Mac OS X; fr) 
Mozilla/5.0 (X11; Linux i686; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 Opera 9.23

More Opera 9.23 user agents strings –>>

Opera 9.22 
Opera/9.22 (X11; OpenBSD i386; U; en) 
Opera/9.22 (X11; Linux i686; U; en) 
Opera/9.22 (X11; Linux i686; U; de) 
Opera/9.22 (Windows NT 6.0; U; ru) 
Opera/9.22 (Windows NT 6.0; U; en) 
Opera/9.22 (Windows NT 5.1; U; SV1; MEGAUPLOAD 2.0; ru) 
Opera/9.22 (Windows NT 5.1; U; SV1; MEGAUPLOAD 1.0; ru) 
Opera/9.22 (Windows NT 5.1; U; pl) 
Opera/9.22 (Windows NT 5.1; U; fr) 
Opera/9.22 (Windows NT 5.1; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.0) Gecko/20060728 Firefox/1.5.0 Opera 9.22 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; en) Opera 9.22 
Opera 9.21 
Opera/9.21 (X11; Linux x86_64; U; en) 
Opera/9.21 (X11; Linux i686; U; es-es) 
Opera/9.21 (X11; Linux i686; U; en) 
Opera/9.21 (X11; Linux i686; U; de) 
Opera/9.21 (Windows NT 6.0; U; nb) 
Opera/9.21 (Windows NT 6.0; U; en) 
Opera/9.21 (Windows NT 5.2; U; en) 
Opera/9.21 (Windows NT 5.1; U; SV1; MEGAUPLOAD 1.0; ru) 
Opera/9.21 (Windows NT 5.1; U; ru) 
Opera/9.21 (Windows NT 5.1; U; pt-br) 
Opera/9.21 (Windows NT 5.1; U; pl) 
Opera/9.21 (Windows NT 5.1; U; nl) 
Opera/9.21 (Windows NT 5.1; U; MEGAUPLOAD 1.0; en) 
Opera/9.21 (Windows NT 5.1; U; fr) 
Opera/9.21 (Windows NT 5.1; U; en) 
Opera/9.21 (Windows NT 5.1; U; de) 
Opera/9.21 (Windows NT 5.0; U; de) 
Opera/9.21 (Windows 98; U; en) 
Opera/9.21 (Macintosh; PPC Mac OS X; U; en) 
Opera/9.21 (Macintosh; Intel Mac OS X; U; en)

More Opera 9.21 user agents strings –>>

Opera 9.20 
Opera/9.20(Windows NT 5.1; U; en) 
Opera/9.20 (X11; Linux x86_64; U; en) 
Opera/9.20 (X11; Linux ppc; U; en) 
Opera/9.20 (X11; Linux i686; U; tr) 
Opera/9.20 (X11; Linux i686; U; ru) 
Opera/9.20 (X11; Linux i686; U; pl) 
Opera/9.20 (X11; Linux i686; U; es-es) 
Opera/9.20 (X11; Linux i686; U; en) 
Opera/9.20 (X11; Linux i586; U; en) 
Opera/9.20 (Windows NT 6.0; U; es-es) 
Opera/9.20 (Windows NT 6.0; U; en) 
Opera/9.20 (Windows NT 6.0; U; de) 
Opera/9.20 (Windows NT 5.2; U; en) 
Opera/9.20 (Windows NT 5.1; U; zh-tw) 
Opera/9.20 (Windows NT 5.1; U; nb) 
Opera/9.20 (Windows NT 5.1; U; MEGAUPLOAD=1.0; es-es) 
Opera/9.20 (Windows NT 5.1; U; it) 
Opera/9.20 (Windows NT 5.1; U; es-es) 
Opera/9.20 (Windows NT 5.1; U; es-AR) 
Opera/9.20 (Windows NT 5.1; U; en)

More Opera 9.20 user agents strings –>>

Opera 9.12 
Opera/9.12 (X11; Linux i686; U; en) (Ubuntu) 
Opera/9.12 (Windows NT 5.0; U; ru) 
Opera/9.12 (Windows NT 5.0; U) 
Opera 9.10 
Opera/9.10 (X11; Linux; U; en) 
Opera/9.10 (X11; Linux x86_64; U; en) 
Opera/9.10 (X11; Linux i686; U; pl) 
Opera/9.10 (X11; Linux i686; U; kubuntu;pl) 
Opera/9.10 (X11; Linux i686; U; en) 
Opera/9.10 (X11; Linux i386; U; en) 
Opera/9.10 (Windows NT 6.0; U; it-IT) 
Opera/9.10 (Windows NT 6.0; U; en) 
Opera/9.10 (Windows NT 5.2; U; en) 
Opera/9.10 (Windows NT 5.2; U; de) 
Opera/9.10 (Windows NT 5.1; U; zh-tw) 
Opera/9.10 (Windows NT 5.1; U; sv) 
Opera/9.10 (Windows NT 5.1; U; pt) 
Opera/9.10 (Windows NT 5.1; U; pl) 
Opera/9.10 (Windows NT 5.1; U; nl) 
Opera/9.10 (Windows NT 5.1; U; MEGAUPLOAD 1.0; pl) 
Opera/9.10 (Windows NT 5.1; U; it) 
Opera/9.10 (Windows NT 5.1; U; fi) 
Opera/9.10 (Windows NT 5.1; U; es-es) 
Opera/9.10 (Windows NT 5.1; U; en)

More Opera 9.10 user agents strings –>>

Opera 9.02 
Opera/9.02 (X11; Linux i686; U; pl) 
Opera/9.02 (X11; Linux i686; U; hu) 
Opera/9.02 (X11; Linux i686; U; en) 
Opera/9.02 (X11; Linux i686; U; de) 
Opera/9.02 (Windows XP; U; ru) 
Opera/9.02 (Windows NT 5.2; U; en) 
Opera/9.02 (Windows NT 5.2; U; de) 
Opera/9.02 (Windows NT 5.1; U; zh-cn) 
Opera/9.02 (Windows NT 5.1; U; ru) 
Opera/9.02 (Windows NT 5.1; U; pt-br) 
Opera/9.02 (Windows NT 5.1; U; pl) 
Opera/9.02 (Windows NT 5.1; U; nb) 
Opera/9.02 (Windows NT 5.1; U; ja) 
Opera/9.02 (Windows NT 5.1; U; fi) 
Opera/9.02 (Windows NT 5.1; U; en) 
Opera/9.02 (Windows NT 5.1; U; de) 
Opera/9.02 (Windows NT 5.0; U; sv) 
Opera/9.02 (Windows NT 5.0; U; pl) 
Opera/9.02 (Windows NT 5.0; U; en) 
Opera/9.02 (Windows NT 5.0; U; de)

More Opera 9.02 user agents strings –>>

Opera 9.01 
Opera/9.01 (X11; OpenBSD i386; U; en) 
Opera/9.01 (X11; Linux i686; U; en) 
Opera/9.01 (X11; FreeBSD 6 i386; U;pl) 
Opera/9.01 (X11; FreeBSD 6 i386; U; en) 
Opera/9.01 (Windows NT 5.2; U; ru) 
Opera/9.01 (Windows NT 5.2; U; en) 
Opera/9.01 (Windows NT 5.1; U; ru) 
Opera/9.01 (Windows NT 5.1; U; pl) 
Opera/9.01 (Windows NT 5.1; U; ja) 
Opera/9.01 (Windows NT 5.1; U; es-es) 
Opera/9.01 (Windows NT 5.1; U; en) 
Opera/9.01 (Windows NT 5.1; U; de) 
Opera/9.01 (Windows NT 5.1; U; da) 
Opera/9.01 (Windows NT 5.1; U; cs) 
Opera/9.01 (Windows NT 5.1; U; bg) 
Opera/9.01 (Windows NT 5.1) 
Opera/9.01 (Windows NT 5.0; U; en) 
Opera/9.01 (Windows NT 5.0; U; de) 
Opera/9.01 (Macintosh; PPC Mac OS X; U; it) 
Opera/9.01 (Macintosh; PPC Mac OS X; U; en)

More Opera 9.01 user agents strings –>>

Opera 9.00 
Opera/9.00 (X11; Linux i686; U; pl) 
Opera/9.00 (X11; Linux i686; U; en) 
Opera/9.00 (X11; Linux i686; U; de) 
Opera/9.00 (Windows; U) 
Opera/9.00 (Windows NT 5.2; U; ru) 
Opera/9.00 (Windows NT 5.2; U; pl) 
Opera/9.00 (Windows NT 5.2; U; en) 
Opera/9.00 (Windows NT 5.1; U; ru) 
Opera/9.00 (Windows NT 5.1; U; pl) 
Opera/9.00 (Windows NT 5.1; U; nl) 
Opera/9.00 (Windows NT 5.1; U; ja) 
Opera/9.00 (Windows NT 5.1; U; it) 
Opera/9.00 (Windows NT 5.1; U; fr) 
Opera/9.00 (Windows NT 5.1; U; fi) 
Opera/9.00 (Windows NT 5.1; U; es-es) 
Opera/9.00 (Windows NT 5.1; U; en) 
Opera/9.00 (Windows NT 5.1; U; de) 
Opera/9.00 (Windows NT 5.0; U; en) 
Opera/9.00 (Nintindo Wii; U; ; 103858; Wii Shop Channel/1.0; en) 
Opera/9.00 (Nintendo Wii; U; ; 1038-58; Wii Internet Channel/1.0; en)

More Opera 9.00 user agents strings –>>

Opera 8.65 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) Opera 8.65 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; Sprint:PPC-6700) Opera 8.65 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 320×320)Opera 8.65 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 320×320) Opera 8.65 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240×320) Opera 8.65 [zh-cn] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240×320) Opera 8.65 [nl] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240×320) Opera 8.65 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240×240) Opera 8.65 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC) Opera 8.65 [en] 
Opera 8.60 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) Opera 8.60 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240×320) Opera 8.60 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 240×240) Opera 8.60 [en] 
Opera 8.54 
Opera/8.54 (X11; Linux i686; U; pl) 
Opera/8.54 (X11; Linux i686; U; de) 
Opera/8.54 (Windows NT 5.1; U; ru) 
Opera/8.54 (Windows NT 5.1; U; pl) 
Opera/8.54 (Windows NT 5.1; U; en) 
Opera/8.54 (Windows NT 5.0; U; en) 
Opera/8.54 (Windows NT 5.0; U; de) 
Opera/8.54 (Windows 98; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; pl) Opera 8.54 
Mozilla/5.0 (Windows 98; U; en) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; en) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; pl) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; fr) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; de) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; da) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; pl) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; en) Opera 8.54 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; en) Opera 8.54 
Opera 8.53 
Opera/8.53 (Windows NT 5.2; U; en) 
Opera/8.53 (Windows NT 5.1; U; pt) 
Opera/8.53 (Windows NT 5.1; U; en) 
Opera/8.53 (Windows NT 5.1; U; de) 
Opera/8.53 (Windows NT 5.0; U; en) 
Opera/8.53 (Windows 98; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.53 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; sv) Opera 8.53 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.53 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.53 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; en) Opera 8.53 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; en) Opera 8.53 
Opera 8.52 
Opera/8.52 (X11; Linux x86_64; U; en) 
Opera/8.52 (X11; Linux i686; U; en) 
Opera/8.52 (Windows NT 5.1; U; ru) 
Opera/8.52 (Windows NT 5.1; U; en) 
Opera/8.52 (Windows NT 5.0; U; en) 
Opera/8.52 (Windows ME; U; en) 
Mozilla/5.0 (X11; Linux i686; U; en) Opera 8.52 
Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.52 
Mozilla/5.0 (Windows NT 5.1; U; de) Opera 8.52 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; en) Opera 8.52 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; pl) Opera 8.52 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.52 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; de) Opera 8.52 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; en) Opera 8.52 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; en) Opera 8.52 
Opera 8.51 
Opera/8.51 (X11; U; Linux i686; en-US; rv:1.8) 
Opera/8.51 (X11; Linux x86_64; U; en) 
Opera/8.51 (X11; Linux i686; U; en) 
Opera/8.51 (Windows NT 5.1; U; pl) 
Opera/8.51 (Windows NT 5.1; U; nb) 
Opera/8.51 (Windows NT 5.1; U; fr) 
Opera/8.51 (Windows NT 5.1; U; en) 
Opera/8.51 (Windows NT 5.1; U; de) 
Opera/8.51 (Windows NT 5.0; U; en) 
Opera/8.51 (Windows 98; U; en) 
Opera/8.51 (Macintosh; PPC Mac OS X; U; de) 
Opera/8.51 (FreeBSD 5.1; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; ru) Opera 8.51 
Mozilla/5.0 (Windows NT 5.1; U; fr) Opera 8.51 
Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.51 
Mozilla/5.0 (Windows ME; U; en) Opera 8.51 
Mozilla/5.0 (Macintosh; PPC Mac OS X; U; en) Opera 8.51 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; ru) Opera 8.51 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; en) Opera 8.51 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; sv) Opera 8.51

More Opera 8.51 user agents strings –>>

Opera 8.50 
Opera/8.50 (Windows NT 5.1; U; ru) 
Opera/8.50 (Windows NT 5.1; U; pl) 
Opera/8.50 (Windows NT 5.1; U; fr) 
Opera/8.50 (Windows NT 5.1; U; es-ES) 
Opera/8.50 (Windows NT 5.1; U; en) 
Opera/8.50 (Windows NT 5.1; U; de) 
Opera/8.50 (Windows NT 5.0; U; fr) 
Opera/8.50 (Windows NT 5.0; U; en) 
Opera/8.50 (Windows NT 5.0; U; de) 
Opera/8.50 (Windows ME; U; en) 
Opera/8.50 (Windows 98; U; ru) 
Opera/8.50 (Windows 98; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.50 
Mozilla/5.0 (Windows NT 5.1; U; de) Opera 8.50 
Mozilla/5.0 (Windows NT 5.0; U; de) Opera 8.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; ru) Opera 8.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; en) Opera 8.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; tr) Opera 8.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; sv) Opera 8.50 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.50

More Opera 8.50 user agents strings –>>

Opera 8.10 
Opera/8.10 (Windows NT 5.1; U; en) 
Opera 8.02 
Opera/8.02 (Windows NT 5.1; U; ru) 
Opera/8.02 (Windows NT 5.1; U; en) 
Opera/8.02 (Windows NT 5.1; U; de) 
Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.02 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; en) Opera 8.02 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.02 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; de) Opera 8.02 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; en) Opera 8.02 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; de) Opera 8.02 
Mozilla/4.0 (compatible; MSIE 6.0; Windows ME; pl) Opera 8.02 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; de) Opera 8.02 
Opera 8.01 
Opera/8.01 (Windows NT 5.1; U; pl) 
Opera/8.01 (Windows NT 5.1; U; fr) 
Opera/8.01 (Windows NT 5.1; U; en) 
Opera/8.01 (Windows NT 5.1; U; de) 
Opera/8.01 (Windows NT 5.0; U; de) 
Opera/8.01 (Macintosh; U; PPC Mac OS; en) 
Opera/8.01 (Macintosh; PPC Mac OS X; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.01 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.01 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.01 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; de) Opera 8.01 
Opera 8.00 
Opera/8.00 (Windows NT 5.1; U; en) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.00 
Opera/8.0 (X11; Linux i686; U; cs) 
Opera/8.0 (Windows NT 5.1; U; en) 
Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; IT) Opera 8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; de) Opera 8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; en) Opera 8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; de) Opera 8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE) Opera 8.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; en) Opera 8.0 
Opera 7.60 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 7.60 
Opera 7.54u1 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.54u1 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98) Opera 7.54u1 [en] 
Opera 7.54 
Opera/7.54 (X11; Linux i686; U) [en] 
Opera/7.54 (Windows NT 5.1; U) [en] 
Opera/7.54 (Windows NT 5.1; U) [it] 
Opera/7.54 (Windows NT 5.1; U) [en] 
Opera/7.54 (Windows NT 5.1; U) [de] 
Opera/7.54 (Windows NT 5.0; U) [en] 
Opera/7.54 (Windows NT 5.0; U) [de] 
Opera/7.54 (Windows 98; U) [de] 
Mozilla/5.0 (X11; Linux i686; U) Opera 7.54 [en] 
Mozilla/5.0 (X11; Linux i686; U) Opera 7.54 [en] 
Mozilla/5.0 (Windows NT 5.1; U) Opera 7.54 [de] 
Mozilla/5.0 (Windows NT 5.0; U) Opera 7.54 [en] 
Mozilla/4.78 (Windows NT 5.1; U) Opera 7.54 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686) Opera 7.54 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.54 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.54 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.54 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.54 [pl] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.54 [de] 
Mozilla/4.0 (compatible; MSIE 5.23; Mac_PowerPC) Opera 7.54 [en]

More Opera 7.54 user agents strings –>>

Opera 7.53 
Opera/7.53 (X11; Linux i686; U) [en_US] 
Opera/7.53 (Windows NT 5.1; U) [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.53 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows ME) Opera 7.53 [en] 
Opera 7.52 
Opera/7.52 (Windows NT 5.1; U) [en] 
Opera/7.52 (Windows NT 5.1; U) [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.52 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.52 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.52 [en] 
Opera 7.51 
Opera/7.51 (X11; SunOS sun4u; U) [de] 
Opera/7.51 (Windows NT 5.1; U) [en] 
Opera/7.51 (Linux) [en] 
Mozilla/4.78 (Windows NT 5.1; U) Opera 7.51 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.51 [ru] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.51 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.51 [en] 
Opera 7.50 
Opera/7.50 (Windows XP; U) 
Opera/7.50 (Windows NT 5.1; U) [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.50 [ru] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.50 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.50 [ru] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.50 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98) Opera 7.50 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; ; Linux i686) Opera 7.50 [en] 
Opera 7.23 
Opera/7.23 (Windows NT 6.0; U) [zh-cn] 
Opera/7.23 (Windows NT 5.1; U; sv) 
Opera/7.23 (Windows NT 5.0; U) [en] 
Opera/7.23 (Windows NT 5.0; U) [fr] 
Opera/7.23 (Windows NT 5.0; U) [en] 
Opera/7.23 (Windows 98; U) [en] 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686) Opera 7.23 [fi] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.23 [ru] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.23 [ru] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.23 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.23 [en-GB] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.23 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.23 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.23 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.23 [ca] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 4.0) Opera 7.23 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98) Opera 7.23 [en] 
Opera 7.22 
Opera/7.22 (Windows NT 5.1; U) [de] 
Opera 7.21 
Opera/7.21 (Windows NT 5.1; U) [en] 
Mozilla/5.0 (Windows NT 5.0; U) Opera 7.21 [en] 
Opera 7.20 
Opera/7.20 (Windows NT 5.1; U) [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.20 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.20 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98) Opera 7.20 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows 98) Opera 7.20 [de] 
Opera 7.11 
Opera/7.11 (Windows NT 5.1; U) [pl] 
Opera/7.11 (Windows NT 5.1; U) [en] 
Opera/7.11 (Windows NT 5.1; U) [de] 
Opera/7.11 (Windows NT 5.0; U) [en] 
Opera/7.11 (Windows NT 5.0; U) [de] 
Opera/7.11 (Windows 98; U) [en] 
Opera/7.11 (Windows 98; U) [de] 
Opera/7.11 (Linux 2.6.0-test4 i686; U) [en] 
Mozilla/5.0 (Windows NT 5.1; U) Opera 7.11 [en] 
Mozilla/5.0 (Windows NT 5.0; U) Opera 7.11 [en] 
Mozilla/5.0 (Linux 2.4.21-0.13mdk i686; U) Opera 7.11 [en] 
Mozilla/4.78 (Windows NT 5.0; U) Opera 7.11 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.11 [ru] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.11 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.11 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.11 [fr] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.11 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.11 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 4.0) Opera 7.11 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows ME) Opera 7.11 [en]

More Opera 7.11 user agents strings –>>

Opera 7.10 
Opera/7.10 (Windows NT 5.1; U) [en] 
Opera/7.10 (Windows NT 5.0; U) [en] 
Opera/7.10 (Windows NT 4.0; U) [de] 
Opera/7.10 (Linux Debian;en-US) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.10 [fr] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.10 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Opera 7.10 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 4.0) Opera 7.10 [de] 
Mozilla/3.0 (Windows NT 5.0; U) Opera 7.10 [de] 
Opera 7.03 
Opera/7.03 (Windows NT 5.1; U) [en] 
Opera/7.03 (Windows NT 5.1; U) [de] 
Opera/7.03 (Windows NT 5.0; U) [en] 
Opera/7.03 (Windows NT 5.0; U) [de] 
Opera/7.03 (Windows NT 4.0; U) [en] 
Opera/7.03 (Windows 98; U) [en] 
Opera/7.03 (Windows 98; U) [de] 
Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.6) Gecko/2009020911 Ubuntu/8.10 (intrepid) Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.03 [de] 
Mozilla/5.0 (Windows NT 5.1; U) Opera 7.03 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.03 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.03 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.03 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.03 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows ME) Opera 7.03 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 98) Opera 7.03 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 98) Opera 7.03 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 95) Opera 7.03 [de] 
Opera 7.02 
Opera/7.02 (Windows NT 5.1; U) [fr] 
Opera/7.02 (Windows 98; U) [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.02 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.02 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 4.0) Opera 7.02 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows ME) Opera 7.02 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 98) Opera 7.02 [en] 
Opera 7.01 
Opera/7.01 (Windows NT 5.1; U) [en] 
Opera/7.01 (Windows NT 5.0; U) [en] 
Opera/7.01 (Windows 98; U) [fr] 
Opera/7.01 (Windows 98; U) [en] 
Mozilla/5.0 (Windows NT 5.0; U) Opera 7.01 [en] 
Mozilla/4.78 (Windows NT 5.0; U) Opera 7.01 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.01 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.01 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.01 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 98) Opera 7.01 [en] 
Mozilla/3.0 (Windows NT 5.0; U) Opera 7.01 [en] 
Opera 7.0 
Opera/7.0 (Windows NT 5.1; U) [en] 
Opera/7.0 (Windows NT 4.0; U) [en] 
Opera/7.0 (Windows NT 4.0; U) [de] 
Opera/7.0 (Windows 98; U) [en] 
Opera/7.0 (Windows 2000; U) [en] 
Opera/7.0 (Windows 2000; U) [de] 
Mozilla/5.0 (Windows 2000; U) Opera 7.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows XP) Opera 7.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.0 [de] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 4.0) Opera 7.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows ME) Opera 7.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 98) Opera 7.0 [en] 
Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows 2000) Opera 7.0 [en] 
Opera 6.12 
Opera/6.12 (Linux 2.4.20-4GB i686; U) [en] 
Opera/6.12 (Linux 2.4.18-14cpq i686; U) [en] 
Mozilla/4.0 (compatible; MSIE 5.0; UNIX) Opera 6.12 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.20-4GB i686) Opera 6.12 [de] 
Opera 6.11 
Opera/6.11 (Linux 2.4.18-bf2.4 i686; U) [en] 
Opera/6.11 (Linux 2.4.18-4GB i686; U) [en] 
Opera/6.11 (Linux 2.4.10-4GB i686; U) [en] 
Opera/6.11 (FreeBSD 4.7-RELEASE i386; U) [en] 
Mozilla/5.0 (Linux 2.4.19-16mdk i686; U) Opera 6.11 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; UNIX) Opera 6.11 [fr] 
Mozilla/4.0 (compatible; MSIE 5.0; UNIX) Opera 6.11 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.4 i686) Opera 6.11 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.20-13.7 i686) Opera 6.11 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.19-4GB i686) Opera 6.11 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.19-16mdk i686) Opera 6.11 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.18 i686) Opera 6.11 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.10-4GB i686) Opera 6.11 [en] 
Opera 6.1 
Mozilla/5.0 (Linux 2.4.18-ltsp-1 i686; U) Opera 6.1 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.19 i686) Opera 6.1 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.18-4GB i686) Opera 6.1 [de] 
Opera 6.06 
Mozilla/5.0 (Windows XP; U) Opera 6.06 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.06 [fr] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.06 [de] 
Opera 6.05 
Opera/6.05 (Windows XP; U) [en] 
Opera/6.05 (Windows XP; U) [en] 
Opera/6.05 (Windows XP; U) [de] 
Opera/6.05 (Windows NT 4.0; U) [ro] 
Opera/6.05 (Windows NT 4.0; U) [fr] 
Opera/6.05 (Windows NT 4.0; U) [de] 
Opera/6.05 (Windows ME; U) [fr] 
Opera/6.05 (Windows ME; U) [de] 
Opera/6.05 (Windows 98; U) [fr] 
Opera/6.05 (Windows 98; U) [en] 
Opera/6.05 (Windows 98; U) [de] 
Opera/6.05 (Windows 2000; U) [oc] 
Opera/6.05 (Windows 2000; U) [ja] 
Opera/6.05 (Windows 2000; U) [it] 
Opera/6.05 (Windows 2000; U) [fr] 
Opera/6.05 (Windows 2000; U) [en] 
Opera/6.05 (Windows 2000; U) [de] 
Mozilla/5.0 (Windows XP; U) Opera 6.05 [de] 
Mozilla/5.0 (Windows NT 4.0; U) Opera 6.05 [en] 
Mozilla/5.0 (Windows ME; U) Opera 6.05 [de]

More Opera 6.05 user agents strings –>>

Opera 6.04 
Opera/6.04 (Windows XP; U) [en] 
Opera/6.04 (Windows XP; U) [de] 
Opera/6.04 (Windows NT 4.0; U) [en] 
Opera/6.04 (Windows NT 4.0; U) [de] 
Opera/6.04 (Windows 98; U) [en-GB] 
Opera/6.04 (Windows 2000; U) [en] 
Opera/6.04 (Windows 2000; U) [de] 
Mozilla/5.0 (Windows 2000; U) Opera 6.04 [en] 
Mozilla/4.78 (Windows 2000; U) Opera 6.04 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.04 [fr] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.04 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.04 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.04 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.04 [pl] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.04 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.04 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.04 [de] 
Opera/6.04 (Windows XP; U) [de] 
Opera/6.04 (Windows 2000; U) [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.04 [en]

More Opera 6.04 user agents strings –>>

Opera 6.03 
Opera/6.03 (Windows NT 4.0; U) [en] 
Opera/6.03 (Windows 98; U) [en] 
Opera/6.03 (Windows 2000; U) [en] 
Opera/6.03 (Linux 2.4.18-18.7.x i686; U) [en] 
Mozilla/5.0 (Windows 2000; U) Opera 6.03 [en] 
Mozilla/5.0 (Linux 2.4.18-18.7.x i686; U) Opera 6.03 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.03 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.03 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.20-4GB i686) Opera 6.03 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.19-4GB i686) Opera 6.03 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.18-4GB i686) Opera 6.03 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.0-64GB-SMP i686) Opera 6.03 [en] 
Opera 6.02 
Opera/6.02 (Windows NT 4.0; U) [de] 
Mozilla/5.0 (Windows 2000; U) Opera 6.02 [en] 
Mozilla/5.0 (Linux; U) Opera 6.02 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.02 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 6.02 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 6.02 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.02 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.20-686 i686) Opera 6.02 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.18-4GB i686) Opera 6.02 [en] 
Opera/6.02 (Windows NT 4.0; U) [de] 
Opera 6.01 
Opera/6.01 (Windows XP; U) [de] 
Opera/6.01 (Windows 98; U) [en] 
Opera/6.01 (Windows 98; U) [de] 
Opera/6.01 (Windows 2000; U) [en] 
Opera/6.01 (Windows 2000; U) [de] 
Mozilla/5.0 (Windows 2000; U) Opera 6.01 [en] 
Mozilla/5.0 (Windows 2000; U) Opera 6.01 [de] 
Mozilla/4.78 (Windows 2000; U) Opera 6.01 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.01 [it] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.01 [et] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.01 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.01 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.01 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 6.01 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 6.01 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.01 [it] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.01 [fr] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.01 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.01 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 6.01 [de]

More Opera 6.01 user agents strings –>>

Opera 6.0 
Opera/6.0 (Windows XP; U) [de] 
Opera/6.0 (Windows ME; U) [de] 
Opera/6.0 (Windows 2000; U) [fr] 
Opera/6.0 (Windows 2000; U) [de] 
Opera/6.0 (Macintosh; PPC Mac OS X; U) 
Mozilla/4.76 (Windows NT 4.0; U) Opera 6.0 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows XP) Opera 6.0 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.0 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 6.0 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.0 [fr] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 6.0 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.0 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 6.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 6.0 [de]

More Opera 6.0 user agents strings –>>

Opera 5.12 
Opera/5.12 (Windows NT 5.1; U) [de] 
Opera/5.12 (Windows 98; U) [en] 
Mozilla/5.0 (Windows 98; U) Opera 5.12 [de] 
Mozilla/4.76 (Windows NT 4.0; U) Opera 5.12 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 5.12 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 5.12 [it] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 5.12 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 5.12 [it] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 5.12 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 5.12 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 5.12 [en] 
Opera/5.12 (Windows NT 5.1; U) [de] 
Opera 5.11 
Opera/5.11 (Windows 98; U) [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 5.11 [de] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 5.11 [en] 
Opera 5.02 
Opera/5.02 (Windows 98; U) [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 5.1) Opera 5.02 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 5.02 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 98) Opera 5.02 [en] 
Opera/5.02 (Windows NT 5.0; U) [en] 
Opera 5.0 
Opera/5.0 (SunOS 5.8 sun4u; U) [en] 
Mozilla/5.0 (SunOS 5.8 sun4u; U) Opera 5.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; SunOS 5.8 sun4u) Opera 5.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 5.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux) Opera 5.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.4-4GB i686) Opera 5.0 [en] 
Mozilla/4.0 (compatible; MSIE 5.0; Linux 2.4.0-4GB i686) Opera 5.0 [en] 
Opera 4.02 
Opera/4.02 (Windows 98; U) [en] 
Opera 10.53 
Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; ko) Opera 10.53 
Opera 10.52 
Opera/9.80 (Windows NT 6.1; U; fr) Presto/2.5.24 Version/10.52 
Opera 10.51 
Opera/9.80 (Windows NT 6.1; U; en) Presto/2.5.22 Version/10.51 
Opera/9.80 (Windows NT 6.0; U; cs) Presto/2.5.22 Version/10.51 
Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.5.22 Version/10.51 
Opera/9.80 (Linux i686; U; en) Presto/2.5.22 Version/10.51 
Mozilla/5.0 (Windows NT 6.1; U; en-GB; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51 
Mozilla/5.0 (Linux i686; U; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51 
Mozilla/4.0 (compatible; MSIE 8.0; Linux i686; en) Opera 10.51 
Opera 10.50 
Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.5.22 Version/10.50 
Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.5.22 Version/10.50 
Opera/9.80 (Windows NT 6.1; U; sk) Presto/2.6.22 Version/10.50 
Opera/9.80 (Windows NT 6.1; U; ja) Presto/2.5.22 Version/10.50 
Opera/9.80 (Windows NT 6.0; U; zh-cn) Presto/2.5.22 Version/10.50 
Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.5.22 Version/10.50 
Opera/10.50 (Windows NT 6.1; U; en-GB) Presto/2.2.2 
Opera 10.10 
Opera/9.80 (X11; Linux x86_64; U; it) Presto/2.2.15 Version/10.10 
Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.10 
Opera/9.80 (Windows NT 6.0; U; Gecko/20100115; pl) Presto/2.2.15 Version/10.10 
Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.10 
Opera/9.80 (Windows NT 5.1; U; de) Presto/2.2.15 Version/10.10 
Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.2.15 Version/10.10 
Mozilla/5.0 (Windows NT 6.0; U; tr; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 10.10 
Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; de) Opera 10.10 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.0; tr) Opera 10.10 
Opera 10.01 
Opera/9.80 (X11; Linux x86_64; U; en-GB) Presto/2.2.15 Version/10.01 
Opera 10.00 
Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux x86_64; U; de) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; ru) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; pt-BR) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; pl) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; nb) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00 
Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 6.0; U; de) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 5.2; U; en) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 5.1; U; zh-cn) Presto/2.2.15 Version/10.00 
Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.2.15 Version/10.00

More Opera 10.00 user agents strings –>>

Opera 
Mozilla/5.0 (Macintosh; ; Intel Mac OS X; fr; rv:1.8.1.1) Gecko/20061204 Opera 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 
Mozilla/4.0 (compatible; MSIE 6.0; Windows CE) Opera 
Opera Mini 
Opera browser for moblile phones. It requests web pages through the company’s servers, which process and compress them before relaying the pages back to the mobile phone. This compression process makes transfer time about two to three times faster, and the pre-processing smooths compatibility with web pages not designed for mobile phones.

Click on any string to get more details

Opera Mini 5.0.3521 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.3521/886; U; en) Presto/2.4.15 
Opera Mini 5.0.19693 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.19693/870; U; en) Presto/2.4.15 
Opera Mini 5.0.19683 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.19683/1278; U; ko) Presto/2.2.0 
Opera Mini 5.0.18741 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.18741/886; U; id) Presto/2.4.15 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.18741/886; U; en) Presto/2.4.15 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.18741/870; U; fr) Presto/2.4.15 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.18741/870; U; en) Presto/2.4.15 
Opera Mini 5.0.18635 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.18635/886; U; en) Presto/2.4.15 
Opera Mini 5.0.17443 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.17443/886; U; en) Presto/2.4.15 
Opera Mini 5.0.17381 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.17381/886; U; en) Presto/2.4.15 
Opera Mini 5.0.16823 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.16823/870; U; en) Presto/2.4.15 
Opera Mini 5.0.019802 
Opera/9.80 (iPhone; Opera Mini/5.0.019802/886; U; ja) Presto/2.4.15 
Opera/9.80 (iPhone; Opera Mini/5.0.019802/886; U; en) Presto/2.4.15 
Opera Mini 5.0.0176 
Opera/9.80 (iPhone; Opera Mini/5.0.0176/764; U; en) Presto/2.4.154.15 
Opera Mini 5.0 
Opera/9.80 (J2ME/MIDP; Opera Mini/5.0/870; U; en) Presto/2.4.15 
Opera Mini 4.4.0.60 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.4.0.60 (Windows XP)/886; U; en) Presto/2.4.15 
Opera Mini 4.2.15410 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.15410/870; U; en) Presto/2.4.15 
Opera Mini 4.2.15066 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.15066/886; U; en) Presto/2.4.15 
Opera Mini 4.2.14912 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14912/870; U; id) Presto/2.4.15 
Opera Mini 4.2.14320 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14320/886; U; id) Presto/2.4.15 
Opera Mini 4.2.13337.Mod.by.Han 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13337.Mod.by.Handler/870; U; en) Presto/2.4.15 
Opera Mini 4.2.13337 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13337/886; U; en) Presto/2.4.15 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13337/870; U; en) Presto/2.4.15 
Opera Mini 4.2.13265 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13265/870; U; ro) Presto/2.4.15 
Opera Mini 4.2.13221 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13221/886; U; en) Presto/2.4.15 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13221/870; U; en) Presto/2.4.15 
Opera Mini 4.2.13057 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13057/870; U; ja) Presto/2.4.15 
Opera Mini 4.1.15082 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.1.15082/870; U; en) Presto/2.4.15 
Opera Mini 4.0 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.0/886; U; en) Presto/2.4.15 
Opera/9.80 (J2ME/MIDP; Opera Mini/4.0/870; U; id) Presto/2.4.15 
Opera/9.60 (J2ME/MIDP; Opera Mini/4.0/490; U; en) Presto/2.2.0 
Opera Mini 1.0 
Opera/9.80 (J2ME/MIDP; Opera Mini/1.0/886; U; en) Presto/2.4.15 
Opera Mobi 
Browser for mobile devices

Click on any string to get more details

Opera Mobi 
Opera/9.80 (Windows NT 6.1; Opera Mobi/49; U; en) Presto/2.4.18 Version/10.00 
Opera/9.80 (Windows NT 6.0; Opera Mobi/49; U; en) Presto/2.4.18 Version/10.00 
Opera/9.80 (Windows NT 5.1; Opera Mobi/49; U; en) Presto/2.4.18 Version/10.00 
Opera/9.80 (Windows Mobile; WCE; Opera Mobi/49; U; en) Presto/2.4.18 Version/10.00 
Opera/9.80 (Macintosh; Intel Mac OS X; Opera Mobi/3730; U; en) Presto/2.4.18 Version/10.00 
Opera/9.80 (Macintosh; Intel Mac OS X; Opera Mobi/27; U; en) Presto/2.4.18 Version/10.00 
Opera/9.80 (Linux i686; Opera Mobi/1040; U; en) Presto/2.5.24 Version/10.00 
Opera/9.80 (Linux i686; Opera Mobi/1038; U; en) Presto/2.5.24 Version/10.00 
Opera/9.80 (Android; Linux; Opera Mobi/49; U; en) Presto/2.4.18 Version/10.00 
Opera/9.80 (Android; Linux; Opera Mobi/27; U; en) Presto/2.4.18 Version/10.00 
Orca 
Browser based on Mozilla Firefox. Developed by Avant force, the developers of Avant Browser

Click on any string to get more details

Orca 1.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.1) Gecko/20090722 Firefox/3.5.1 Orca/1.2 build 2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1.1) Gecko/20090722 Firefox/3.5.1 Orca/1.2 build 2 
Orca 1.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.7) Gecko/2009030821 Firefox/3.0.7 Orca/1.1 build 2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.7) Gecko/2009030821 Firefox/3.0.7 Orca/1.1 build 2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.6) Gecko/2009022300 Firefox/3.0.6 Orca/1.1 build 1 
Oregano 
Oregano is a commercial web browser for the RISC OS range of computers.

Click on any string to get more details

Oregano 1.10 
Mozilla/1.10 [en] (Compatible; RISC OS 3.70; Oregano 1.10) 
Mozilla/1.10 [en] (Compatible; RISC OS 3.70; Oregano 1.10) 
Phoenix 
Mozilla Phoenix, former name of the Mozilla Firebird browser (which is the former name of Mozilla Firefox )

Click on any string to get more details

Phoenix 0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4a) Gecko/20030411 Phoenix/0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.3a) Gecko/20021207 Phoenix/0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4a) Gecko/20030403 Phoenix/0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3a) Gecko/20030105 Phoenix/0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.3a) Gecko/20030101 Phoenix/0.5 
Phoenix 0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2b) Gecko/20021029 Phoenix/0.4 
Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.2b) Gecko/20021029 Phoenix/0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.2b) Gecko/20021029 Phoenix/0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.3a) Gecko/20021203 Phoenix/0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2b) Gecko/20021029 Phoenix/0.4 
Phoenix 0.3 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2b) Gecko/20021014 Phoenix/0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.2b) Gecko/20021014 Phoenix/0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2b) Gecko/20021014 Phoenix/0.3 
Phoenix 0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.2b) Gecko/20021001 Phoenix/0.2 
Phoenix 0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.2b) Gecko/20020923 Phoenix/0.1 
Pogo 
Mozilla Firefox based 3D web browser by AT&T and Vizible. Discontinued

Click on any string to get more details

Pogo 2.0.0.13.6866 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080414 Firefox/2.0.0.13 Pogo/2.0.0.13.6866 
Prism 
XULRunner based browser that hosts web applications without the normal web browser user interfer. Prism is based on a concept called Site Specific Browsers (SSB). An SSB is an application with an embedded browser designed to work exclusively with a single web application. It doesn抰 have the menus, toolbars and accoutrements of a normal web browser.

Click on any string to get more details

Prism 1.0b3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2pre) Gecko/20100115 Prism/1.0b3 
Prism 1.0b2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 Prism/1.0b2 
Prism 0.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.17) Gecko/2010010604 prism/0.8 
QtWeb Internet Browser

Click on any string to get more details

QtWeb Internet Browser 3.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/3.0 http://www.QtWeb.net 
QtWeb Internet Browser 2.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/2.0 http://www.QtWeb.net 
QtWeb Internet Browser 1.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/1.7 http://www.QtWeb.net 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-CO) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/1.7 http://www.QtWeb.net 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/1.7 http://www.QtWeb.net 
QtWeb Internet Browser 1.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; tr-TR) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/1.5 http://www.QtWeb.net 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/1.5 http://www.QtWeb.net 
QtWeb Internet Browser 1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/527+ (KHTML, like Gecko) QtWeb Internet Browser/1.2 http://www.QtWeb.net 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/523.15 (KHTML, like Gecko) QtWeb Internet Browser/1.2 http://www.QtWeb.net 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB) AppleWebKit/523.15 (KHTML, like Gecko) QtWeb Internet Browser/1.2 http://www.QtWeb.net 
retawq 
Interactive, multi-threaded network client (web browser) for text terminals on computers with Unix-like operating systems

Click on any string to get more details

retawq 0.2.6c 
retawq/0.2.6c [en] (text) 
Safari

Click on any string to get more details

Safari 4.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7; en-us) AppleWebKit/533.4 (KHTML, like Gecko) Version/4.1 Safari/533.4 
Safari 4.0dp1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/526.9 (KHTML, like Gecko) Version/4.0dp1 Safari/526.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; tr) AppleWebKit/528.4+ (KHTML, like Gecko) Version/4.0dp1 Safari/526.11.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; en) AppleWebKit/528.4+ (KHTML, like Gecko) Version/4.0dp1 Safari/526.11.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; de) AppleWebKit/528.4+ (KHTML, like Gecko) Version/4.0dp1 Safari/526.11.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.5; en-US; rv:1.9.1b3pre) Gecko/20081212 Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/526.9 (KHTML, like Gecko) Version/4.0dp1 Safari/526.8 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-gb) AppleWebKit/528.10+ (KHTML, like Gecko) Version/4.0dp1 Safari/526.11.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_4; en-us) AppleWebKit/528.4+ (KHTML, like Gecko) Version/4.0dp1 Safari/526.11.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_4; en-gb) AppleWebKit/528.4+ (KHTML, like Gecko) Version/4.0dp1 Safari/526.11.2 
Safari 4.0.5 
Mozilla/5.0 (Windows; U; Windows NT 6.1; es-ES) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs-CZ) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; en-us) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; da-dk) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ja-jp) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/533.4+ (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; de-de) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; ja-jp) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; nl-nl) AppleWebKit/531.22.7 (KHTML, like Gecko) Version/4.0.5 Safari/531.22.7 
Safari 4.0.4 
Mozilla/5.0(iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 Safari/531.21.10gin_lib.cc 
Mozilla/5.0(iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 Safari/531.21.10 
Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-TW) AppleWebKit/531.21.8 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (Windows; U; Windows NT 6.1; ko-KR) AppleWebKit/531.21.8 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/531.21.8 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE) AppleWebKit/532+ (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; hu-hu) AppleWebKit/531.21.8 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/531.21.11 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; ru-ru) AppleWebKit/533.2+ (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; de-at) AppleWebKit/531.21.8 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10 
Mozilla/5.0 (iPhone; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.10 
Mozilla/5.0 (iPhone Simulator; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7D11 Safari/531.21.10 
Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; es-es) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B367 Safari/531.21.10 
Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; es-es) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B360 Safari/531.21.10 
Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.1021.10gin_lib.cc 
Mozilla/5.0 (iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 
Safari 4.0.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-us) AppleWebKit/531.9 (KHTML, like Gecko) Version/4.0.3 Safari/531.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; en-us) AppleWebKit/532.0+ (KHTML, like Gecko) Version/4.0.3 Safari/531.9.2009 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; en-us) AppleWebKit/532.0+ (KHTML, like Gecko) Version/4.0.3 Safari/531.9 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; nl-nl) AppleWebKit/532.3+ (KHTML, like Gecko) Version/4.0.3 Safari/531.9 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; fi-fi) AppleWebKit/531.9 (KHTML, like Gecko) Version/4.0.3 Safari/531.9 
Safari 4.0.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532+ (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; zh-TW) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl-PL) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr-FR) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-DE) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_7; en-us) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-us) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.2 Safari/530.19 
Safari 4.0.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-us) AppleWebKit/531.2+ (KHTML, like Gecko) Version/4.0.1 Safari/530.18 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-us) AppleWebKit/530.19.2 (KHTML, like Gecko) Version/4.0.1 Safari/530.18 
Safari 4.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru-RU) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; hu-HU) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; he-IL) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; he-IL) AppleWebKit/528+ (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr-FR) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; es-es) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de-DE) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv-SE) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-PT) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nb-NO) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; hu-HU) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fi-FI) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16

More Safari 4.0 user agents strings –>>

Safari 3.2.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs-CZ) AppleWebKit/525.28.3 (KHTML, like Gecko) Version/3.2.3 Safari/525.29 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; de-de) AppleWebKit/525.28.3 (KHTML, like Gecko) Version/3.2.3 Safari/525.28.3 
Safari 3.2.2 
Mozilla/5.0 (Windows; U; Windows NT 6.1; de-DE) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-DE) AppleWebKit/528+ (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nb-NO) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ko-KR) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.28 (KHTML, like Gecko) Version/3.2.2 Safari/525.28.1 
Safari 3.2.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sv-SE) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-DE) AppleWebKit/528+ (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ja-JP) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_6; nl-nl) AppleWebKit/530.0+ (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_6; fr-fr) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_6; en-us) AppleWebKit/530.1+ (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; sv-se) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; pl-pl) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; it-it) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; fr-fr) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; es-es) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; zh-tw) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; ru-ru) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; nb-no) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; ko-kr) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; it-it) AppleWebKit/528.8+ (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; it-it) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; hr-hr) AppleWebKit/530.1+ (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; fr-fr) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; es-es) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.2.1 Safari/525.27.1

More Safari 3.2.1 user agents strings –>>

Safari 3.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; hu-HU) AppleWebKit/525.26.2 (KHTML, like Gecko) Version/3.2 Safari/525.26.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU) AppleWebKit/525.26.2 (KHTML, like Gecko) Version/3.2 Safari/525.26.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_5; fi-fi) AppleWebKit/525.26.2 (KHTML, like Gecko) Version/3.2 Safari/525.26.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_5; en-us) AppleWebKit/525.26.2 (KHTML, like Gecko) Version/3.2 Safari/525.26.12 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; sv-se) AppleWebKit/525.26.2 (KHTML, like Gecko) Version/3.2 Safari/525.26.12 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; ja-jp) AppleWebKit/525.26.2 (KHTML, like Gecko) Version/3.2 Safari/525.26.12 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/525.25 (KHTML, like Gecko) Version/3.2 Safari/525.25 
Safari 3.1.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; pl-PL) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fr-FR) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 5.2; pt-BR) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT) AppleWebKit/525+ (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB) AppleWebKit/525.19 (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Windows; U; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.1.2 Safari/525.21 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_6; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_5; fr-fr) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_4; fr-fr) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; sv-se) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.2 Safari/525.22 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; fr) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.2 Safari/525.22 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/530.6+ (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.7+ (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.4+ (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-gb) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.2 Safari/525.20.1

More Safari 3.1.2 user agents strings –>>

Safari 3.1.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525+ (KHTML, like Gecko) Version/3.1.1 Safari/525.17 
Mozilla/5.0 (Mozilla/5.0 (iPhone; U; CPU iPhone OS 2_0_1 like Mac OS X; fr-fr) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Mobile/5G77 Safari/525.20 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_3; sv-se) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_3; en-us) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_3; en) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_2; en) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.18 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; ja-jp) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.18 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; en) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.18 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; de-de) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_3; nl-nl) AppleWebKit/527+ (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_3; nb-no) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_3; hu-hu) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_3; es-es) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_3; en-ca) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.20 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; ja-jp) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.18 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; fr-fr) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1.1 Safari/525.18

More Safari 3.1.1 user agents strings –>>

Safari 3.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; ru-RU) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; da-DK) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_4; en-us) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_2; en-gb) AppleWebKit/526+ (KHTML, like Gecko) Version/3.1 Safari/525.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_2; en-gb) AppleWebKit/526+ (KHTML, like Gecko) Version/3.1 iPhone 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; nl-nl) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/525.27.1 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; pt-br) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; it-it) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; fr-fr) AppleWebKit/525.9 (KHTML, like Gecko) Version/3.1 Safari/525.9 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; es-es) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-us) AppleWebKit/526.1+ (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-us) AppleWebKit/525.9 (KHTML, like Gecko) Version/3.1 Safari/525.9 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-us) AppleWebKit/525.7 (KHTML, like Gecko) Version/3.1 Safari/525.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-gb) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-au) AppleWebKit/525.8+ (KHTML, like Gecko) Version/3.1 Safari/525.6 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_11; en-us) AppleWebKit/525.13 (KHTML, like Gecko) Version/3.1 Safari/525.13

More Safari 3.1 user agents strings –>>

Safari 3.0.4 
Mozilla/5.0 (X11; U; Linux i386; en-GB; rv:1.8.1.7) AppleWebKit (KHTML, like Gecko) (KHTML, like Gecko) Gecko/20070914 Firefox/2.0.0.11 Version/3.0.4 Safari/523.11 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en) AppleWebKit/525+ (KHTML, like Gecko) Version/3.0.4 Safari/523.11 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/523.12.2 (KHTML, like Gecko) Version/3.0.4 Safari/523.12.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/523.10.3 (KHTML, like Gecko) Version/3.0.4 Safari/523.10 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/523.10.3 (KHTML, like Gecko) Version/3.0.4 Safari/523.10 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_4; en-us) AppleWebKit/525.18 (KHTML, like Gecko) Version/3.0.4 Safari/523.10 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; en) AppleWebKit/525.3+ (KHTML, like Gecko) Version/3.0.4 Safari/523.12.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; sv-se) AppleWebKit/523.12.2 (KHTML, like Gecko) Version/3.0.4 Safari/523.12.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; sv-se) AppleWebKit/523.10.6 (KHTML, like Gecko) Version/3.0.4 Safari/523.10.6 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; sv-se) AppleWebKit/523.10.3 (KHTML, like Gecko) Version/3.0.4 Safari/523.10 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; ko-kr) AppleWebKit/523.15.1 (KHTML, like Gecko) Version/3.0.4 Safari/523.15 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; ja-jp) AppleWebKit/523.12.2 (KHTML, like Gecko) Version/3.0.4 Safari/523.12.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; ja-jp) AppleWebKit/523.10.3 (KHTML, like Gecko) Version/3.0.4 Safari/523.10 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; it-it) AppleWebKit/523.12.2 (KHTML, like Gecko) Version/3.0.4 Safari/523.12.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; it-it) AppleWebKit/523.10.6 (KHTML, like Gecko) Version/3.0.4 Safari/523.10.6 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; fr-fr) AppleWebKit/525.1+ (KHTML, like Gecko) Version/3.0.4 Safari/523.10 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; fr-fr) AppleWebKit/523.10.3 (KHTML, like Gecko) Version/3.0.4 Safari/523.10 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; fr) AppleWebKit/523.12.2 (KHTML, like Gecko) Version/3.0.4 Safari/523.12.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; es-es) AppleWebKit/523.15.1 (KHTML, like Gecko) Version/3.0.4 Safari/523.15 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-us) AppleWebKit/525.1+ (KHTML, like Gecko) Version/3.0.4 Safari/523.10

More Safari 3.0.4 user agents strings –>>

Safari 3.0.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 6.0; cs) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; da-DK) AppleWebKit/523.11.1+ (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; da) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs) AppleWebKit/522.15.5 (KHTML, like Gecko) Version/3.0.3 Safari/522.15.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/523.6 (KHTML, like Gecko) Version/3.0.3 Safari/523.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/523.3+ (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ca-es) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; ru-ru) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-us) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/523.9+ (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/523.5+ (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/523.2+ (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; de-de) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1 
Safari 3.0.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; nl) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; zh) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; it) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; el) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; cs) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/522.11 (KHTML, like Gecko) Version/3.0.2 Safari/522.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/522+ (KHTML, like Gecko) Version/3.0.2 Safari/522.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/522.11 (KHTML, like Gecko) Version/3.0.2 Safari/522.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/522.11 (KHTML, like Gecko) Version/3.0.2 Safari/522.12 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/522.11 (KHTML, like Gecko) Version/3.0.2 Safari/522.12 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/522+ (KHTML, like Gecko) Version/3.0.2 Safari/522.12 
Safari 3.0.1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; fi) AppleWebKit/522.12.1 (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en) AppleWebKit/522.12.1 (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; th) AppleWebKit/522.12.1 (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv) AppleWebKit/522.12.1 (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl) AppleWebKit/522.12.1 (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/522.4.1+ (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/522.12.1 (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en) AppleWebKit/522.12.1 (KHTML, like Gecko) Version/3.0.1 Safari/522.12.2 
Safari 3.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; sv-SE) AppleWebKit/523.13 (KHTML, like Gecko) Version/3.0 Safari/523.13 
Mozilla/5.0 (Windows; U; Windows NT 6.0; nl) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15 
Mozilla/5.0 (Windows; U; Windows NT 6.0; da-DK) AppleWebKit/523.12.9 (KHTML, like Gecko) Version/3.0 Safari/523.12.9 
Mozilla/5.0 (Windows; U; Windows NT 5.2; pt) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.2; nl) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; tr-TR) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15 
Mozilla/5.0 (Windows; U; Windows NT 5.1; sv) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR) AppleWebKit/525+ (KHTML, like Gecko) Version/3.0 Safari/523.15 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL) AppleWebKit/523.12.9 (KHTML, like Gecko) Version/3.0 Safari/523.12.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nl) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; nb) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; id) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; hr) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15

More Safari 3.0 user agents strings –>>

Safari 2.2 
Mozilla/5.0 (Linux; U; Ubuntu; en-us) AppleWebKit/525.13 (KHTML, like Gecko) Version/2.2 Firefox/525.13 
Safari 2.0.4 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/419 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/418.9 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/418.9 (KHTML, like Gecko) Safari/ 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pt-pt) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nl-nl) AppleWebKit/418.8 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/418.9 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/419 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/418.9 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fi-fi) AppleWebKit/418.8 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es-es) AppleWebKit/418.8 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es) AppleWebKit/419 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en_CA) AppleWebKit/419 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/418.9 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/418.8 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko)

More Safari 2.0.4 user agents strings –>>

Safari 2.0.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; tr-tr) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nl-nl) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nl-nl) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.9.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nl-nl) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nb-no) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nb-no) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.9.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/417.9 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.9.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418 (KHTML, like Gecko) Safari/417.9.2

More Safari 2.0.3 user agents strings –>>

Safari 2.0.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nl-nl) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nl-nl) AppleWebKit/416.11 (KHTML, like Gecko) Safari/416.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nl-nl) AppleWebKit/416.11 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; nb-no) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/416.11 (KHTML, like Gecko) Safari/416.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/416.12 (KHTML, like Gecko) Safari/412.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/416.11 (KHTML, like Gecko) Safari/416.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/416.11 (KHTML, like Gecko) Safari/416.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-ca) AppleWebKit/416.11 (KHTML, like Gecko) Safari/416.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/416.11 (KHTML, like Gecko) Safari/416.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/416.11 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/416.12 (KHTML, like Gecko) Safari/416.13

More Safari 2.0.2 user agents strings –>>

Safari 2.0.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/412.7 (KHTML, like Gecko) Safari/412.5 
Safari 2.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS; pl-pl) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS; en-en) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/412.6 (KHTML, like Gecko) Safari/412.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/412.6 (KHTML, like Gecko) Safari/412.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es-ES) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en_US) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/412.6 (KHTML, like Gecko) Safari/412.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/412 (KHTML, like Gecko) Safari/412 Privoxy/3.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/412.6.2 (KHTML, like Gecko) Safari/412.2.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/412.6.2 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/412.6 (KHTML, like Gecko) Safari/412.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/412 (KHTML, like Gecko) Safari/412 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/412.6.2 (KHTML, like Gecko) Safari/412.2.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/412.6 (KHTML, like Gecko) Safari/412.2_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/412.6 (KHTML, like Gecko) Safari/412.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/412.6 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/412 (KHTML, like Gecko) Safari/412

More Safari 2.0 user agents strings –>>

Safari 1.3.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/312.8.1 (KHTML, like Gecko) Safari/312.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.3.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.8.1 (KHTML, like Gecko) Safari/312.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.5_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.8 (KHTML, like Gecko) Safari/312.5 
Safari 1.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/312.5.2 (KHTML, like Gecko) Safari/312.3.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.5.2 (KHTML, like Gecko) Safari/312.3.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.5 (KHTML, like Gecko) Safari/312.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/312.5.2 (KHTML, like Gecko) Safari/312.3.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/312.5 (KHTML, like Gecko) Safari/312.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es-es) AppleWebKit/312.5.2 (KHTML, like Gecko) Safari/312.3.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/312.5 (KHTML, like Gecko) Safari/312.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.5.2 (KHTML, like Gecko) Safari/312.3.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.5.2 (KHTML, like Gecko) Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.5 (KHTML, like Gecko) Safari/312.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.5.2 (KHTML, like Gecko) Safari/312.3.3

More Safari 1.3.1 user agents strings –>>

Safari 1.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.1.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.1 (KHTML, like Gecko) Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-ch) AppleWebKit/312.1.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-ca) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/312.1 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.1.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.1.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312.3.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-ch) AppleWebKit/312.1 (KHTML, like Gecko) Safari/312 
Safari 1.2.4 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/125.5.6 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.11 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-ch) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-ch) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.11 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.7 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.6 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.11 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.5.7 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.5.6 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.5.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.11 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.5.7 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.5.6 (KHTML, like Gecko) Safari/125.12_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.5.6 (KHTML, like Gecko) Safari/125.12 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.12_Adobe 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.5.5 (KHTML, like Gecko) Safari/125.12

More Safari 1.2.4 user agents strings –>>

Safari 1.2.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/125.4 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/125.5 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/125.4 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en_CA) AppleWebKit/125.4 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.4 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-au) AppleWebKit/125.4 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.5 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.4 (KHTML, like Gecko) Safari/125.9 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.4 (KHTML, like Gecko) Safari/100 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.4 (KHTML, like Gecko) Safari/125.9 
Safari 1.2.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es-es) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-gb) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.2 (KHTML, like Gecko) Safari/85.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/125.2 (KHTML, like Gecko) Safari/125.7 
Safari 1.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; it-it) AppleWebKit/124 (KHTML, like Gecko) Safari/125.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/124 (KHTML, like Gecko) Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/124 (KHTML, like Gecko) Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/124 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/124 (KHTML, like Gecko) Safari/125.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/124 (KHTML, like Gecko) Safari/125 
Safari 1.0.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/85.8.5 (KHTML, like Gecko) Safari/85.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/85.8.5 (KHTML, like Gecko) Safari/85.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/85.8.5 (KHTML, like Gecko) Safari/85.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/85.8.2 (KHTML, like Gecko) Safari/85.8 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-gb) AppleWebKit/85.8.5 (KHTML, like Gecko) Safari/85.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/85.8.5 (KHTML, like Gecko) Safari/85.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/85.8.2 (KHTML, like Gecko) Safari/85.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/85.8.5 (KHTML, like Gecko) Safari/85.8.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/85.8.5 (KHTML, like Gecko) Safari/85 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/85.8.2 (KHTML, like Gecko) Safari/85.8 
Safari 1.0 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; sv-se) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.7 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/85.7 (KHTML, like Gecko) Safari/85.5 
Safari 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.3) Gecko/2008092816 Mobile Safari 1.1.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fi-fi) AppleWebKit/420+ (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/312.8.1 (KHTML, like Gecko) Safari/312.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/419.2 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-ch) AppleWebKit/85 (KHTML, like Gecko) Safari/85 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-CH) AppleWebKit/419.2 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; da-dk) AppleWebKit/522+ (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_6; en-us) AppleWebKit/528.16 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; it-IT) AppleWebKit/521.25 (KHTML, like Gecko) Safari/521.24 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-us) AppleWebKit/419.2.1 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/522.11.1 (KHTML, like Gecko) Safari/419.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/521.32.1 (KHTML, like Gecko) Safari/521.32.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; es-es) AppleWebKit/531.22.7 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.16 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; it-it) AppleWebKit/525.18 (KHTML, like Gecko) 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.6) Gecko/2009011912 Safari/525.27.1 
Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2_1 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Mobile/5H11a 
Mozilla/5.0 (iPod; U; CPU iPhone OS 2_2_1 like Mac OS X; en-us) AppleWebKit/525.18.1 (KHTML, like Gecko) Mobile/5H11

More Safari user agents strings –>>

SeaMonkey

Click on any string to get more details

SeaMonkey X11 
Seamonkey-1.1.13-1(X11; U; GNU Fedora fc 10) Gecko/20081112 
SeaMonkey 2.1a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.3a4pre) Gecko/20100404 SeaMonkey/2.1a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-CA; rv:1.9.3a3pre) Gecko/20100312 SeaMonkey/2.1a1pre 
SeaMonkey 2.0b2pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.2pre) Gecko/20090723 SeaMonkey/2.0b2pre 
SeaMonkey 2.0b1pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b3pre) Gecko/20090302 SeaMonkey/2.0b1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b4pre) Gecko/20090405 SeaMonkey/2.0b1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; rv:1.9.1b4pre) Gecko/20090419 SeaMonkey/2.0b1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; ru; rv:1.9.1b4pre) Gecko/20090419 SeaMonkey/2.0b1pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en; rv:1.9.1b4pre) Gecko/20090419 SeaMonkey/2.0b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b5pre) Gecko/20090428 SeaMonkey/2.0b1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9.1b4pre) Gecko/20090419 SeaMonkey/2.0b1pre 
SeaMonkey 2.0b1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1.1pre) Gecko/20090717 SeaMonkey/2.0b1 
SeaMonkey 2.0a3pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1b3pre) Gecko/20081208 SeaMonkey/2.0a3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20081208 SeaMonkey/2.0a3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9.2a1pre) Gecko/20081228 SeaMonkey/2.0a3pre 
SeaMonkey 2.0a3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.1b3pre) Gecko/20090223 SeaMonkey/2.0a3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.4; en-US; rv:1.9.1b3pre) Gecko/20090223 SeaMonkey/2.0a3 
SeaMonkey 2.0a2pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b1pre) Gecko/20080926001251 SeaMonkey/2.0a2pre 
SeaMonkey 2.0a2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.9.1b3pre) Gecko/20081202 SeaMonkey/2.0a2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1b3pre) Gecko/20081202 SeaMonkey/2.0a2 
SeaMonkey 2.0a1pre 
Mozilla/5.0 (X11; U; Linux i686; rv:1.9.1a2pre) Gecko/20080824052448 SeaMonkey/2.0a1pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9pre) Gecko/2008061501 SeaMonkey/2.0a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.9b3pre) Gecko/2008010602 SeaMonkey/2.0a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a6pre) Gecko/20070625 SeaMonkey/2.0a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a5pre) Gecko/20070529 SeaMonkey/2.0a1pre 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr; rv:1.9b4pre) Gecko/2008022502 SeaMonkey/2.0a1pre 
SeaMonkey 2.0a1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.1b1pre) Gecko/20080925121544 SeaMonkey/2.0a1 
SeaMonkey 2.0.4pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.9pre) Gecko/20100212 SeaMonkey/2.0.4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-CA; rv:1.9.1.9pre) Gecko/20100305 SeaMonkey/2.0.4pre 
SeaMonkey 2.0.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1.8) Gecko/20100205 SeaMonkey/2.0.3 
SeaMonkey 2.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.7) Gecko/20100104 SeaMonkey/2.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.1.7) Gecko/20100104 SeaMonkey/2.0.2 
SeaMonkey 2.0 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1b3pre) Gecko/20081208 SeaMonkey/2.0 
SeaMonkey 1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.9a1) Gecko/20060812 SeaMonkey/1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a5pre) Gecko/20070527 SeaMonkey/1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a3pre) Gecko/20070317 SeaMonkey/1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2pre) Gecko/20070130 SeaMonkey/1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a2pre) Gecko/20070109 SeaMonkey/1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060906 SeaMonkey/1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9a1) Gecko/20060520 SeaMonkey/1.5a 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a1) Gecko/20060206 SeaMonkey/1.5a 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.9a1) Gecko/20060707 SeaMonkey/1.5a 
Mozilla/5.0 (BeOS; U; BeOS BePC; en-US; rv:1.9a1) Gecko/20060702 SeaMonkey/1.5a 
SeaMonkey 1.1b 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1) Gecko/20061101 SeaMonkey/1.1b 
SeaMonkey 1.1a 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20060301 SeaMonkey/1.1a Mnenhy/0.7.3.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1b2) Gecko/20060821 SeaMonkey/1.1a 
SeaMonkey 1.1.9 
Mozilla/5.0 (X11; U; Linux x86_64; fr-FR; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 (Ubuntu-1.1.9+nobinonly-0ubuntu1) 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 (Ubuntu-1.1.9+nobinonly-0ubuntu1) 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; PL; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.13) Gecko/20080313 SeaMonkey/1.1.9 
SeaMonkey 1.1.8 
Mozilla/5.0 (X11; U; Linux x86_64; fr-FR; rv:1.8.1.12) Gecko/20080209 SeaMonkey/1.1.8 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.12) Gecko/20080209 SeaMonkey/1.1.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080208 SeaMonkey/1.1.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080201 SeaMonkey/1.1.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070802 Firefox/2.0.0.11 SeaMonkey/1.1.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080201 SeaMonkey/1.1.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080201 MultiZilla/1.8.3.4e SeaMonkey/1.1.8 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.8.1.12) Gecko/20080201 SeaMonkey/1.1.8 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.12) Gecko/20080201 SeaMonkey/1.1.8 
SeaMonkey 1.1.7pre 
Mozilla/5.0 (BeOS; U; Haiku BePC; en-US; rv:1.8.1.10pre) Gecko/20080112 SeaMonkey/1.1.7pre 
SeaMonkey 1.1.7 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.11) Gecko/20071128 SeaMonkey/1.1.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080201 SeaMonkey/1.1.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11) Gecko/20071128 SeaMonkey/1.1.7 Mnenhy/0.7.5.666 
SeaMonkey 1.1.6 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.8.1.9) Gecko/20071030 SeaMonkey/1.1.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.8.1.9) Gecko/20071030 SeaMonkey/1.1.6 Mnenhy/0.7.5.666 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.9) Gecko/20071030 SeaMonkey/1.1.6 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.9) Gecko/20071030 SeaMonkey/1.1.6 
SeaMonkey 1.1.5 
Mozilla/5.0 (Windows; U; WinNT3.51; en-US; rv:1.8.1.8) Gecko/20071009 SeaMonkey/1.1.5 
SeaMonkey 1.1.4 
Mozilla/5.0 (X11; U; Linux x86_64; fr-FR; rv:1.8.1.6) Gecko/20070803 SeaMonkey/1.1.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.6) Gecko/20070802 SeaMonkey/1.1.4 Mnenhy/0.7.5.666 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070802 SeaMonkey/1.1.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.1.6) Gecko/20070802 SeaMonkey/1.1.4 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.6) Gecko/20070802 SeaMonkey/1.1.4 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-GB; rv:1.8.1.6) Gecko/20070802 SeaMonkey/1.1.4 
SeaMonkey 1.1.3 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.8.1.5) Gecko/20070716 SeaMonkey/1.1.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.5) Gecko/20070716 SeaMonkey/1.1.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.5) Gecko/20070716 SeaMonkey/1.1.3 
SeaMonkey 1.1.2 
Mozilla/5.0 (X11; U; Linux x86_64; fr-FR; rv:1.8.1.4) Gecko/20070528 SeaMonkey/1.1.2 
Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.8.1.4) Gecko/20070509 SeaMonkey/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4) Gecko/20070509 SeaMonkey/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.1.4) Gecko/20070509 SeaMonkey/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.4) Gecko/20070509 SeaMonkey/1.1.2 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8.1.4) Gecko/20070509 SeaMonkey/1.1.2 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.4) Gecko/20070509 SeaMonkey/1.1.2 
SeaMonkey 1.1.19 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.24) Gecko/20100228 SeaMonkey/1.1.19 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.24) Gecko/20100301 SeaMonkey/1.1.19 
SeaMonkey 1.1.18 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.23) Gecko/20090907 SeaMonkey/1.1.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.8.1.23) Gecko/20090825 SeaMonkey/1.1.18 
Mozilla/5.0 (Windows; U; Win 9x 4.90; de-AT; rv:1.8.1.23) Gecko/20090825 SeaMonkey/1.1.18 
SeaMonkey 1.1.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.22) Gecko/20090708 SeaMonkey/1.1.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.22) Gecko/20090605 SeaMonkey/1.1.17 (Ubuntu-1.1.17+nobinonly-0ubuntu1) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.22) Gecko/20090605 SeaMonkey/1.1.17 Mnenhy/0.7.6.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8.1.22) Gecko/20090605 SeaMonkey/1.1.17 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.22) Gecko/20090605 SeaMonkey/1.1.17 
SeaMonkey 1.1.16 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.21) Gecko/20090413 SeaMonkey/1.1.16 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.21) Gecko/20090403 SeaMonkey/1.1.16 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-AT; rv:1.8.1.21) Gecko/20090403 SeaMonkey/1.1.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090403 SeaMonkey/1.1.16 Mnenhy/0.7.5.666 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090403 SeaMonkey/1.1.16 Mnenhy/0.7.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090403 SeaMonkey/1.1.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090403 MultiZilla/1.8.3.4e SeaMonkey/1.1.16 
SeaMonkey 1.1.15 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.21) Gecko/20090328 Fedora/1.1.15-3.fc10 SeaMonkey/1.1.15 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.21) Gecko/20090322 SeaMonkey/1.1.15 
Mozilla/5.0 (X11; U; Linux i686; de-DE; rv:1.8.1.21) Gecko/20090322 SeaMonkey/1.1.15 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.21) Gecko/20090303 SeaMonkey/1.1.15 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090303 SeaMonkey/1.1.15 Mnenhy/0.7.6.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090303 SeaMonkey/1.1.15 Mnenhy/0.7.5.666 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8.1.21) Gecko/20090303 SeaMonkey/1.1.15 Mnenhy/0.7.6.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8.1.21) Gecko/20090303 SeaMonkey/1.1.15 
Mozilla/5.0 (AmigaOS; U; AmigaOS 1.3; en-US; rv:1.8.1.21) Gecko/20090303 SeaMonkey/1.1.15 
SeaMonkey 1.1.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081221 SeaMonkey/1.1.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081218 SeaMonkey/1.1.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081216 SeaMonkey/1.1.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (X11; U; Linux i686; de-AT; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 Mnenhy/0.7.6.0 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090303 SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 Mnenhy/0.7.5.666 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081204 MultiZilla/1.8.3.5c SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (AmigaOS; U; AmigaOS 1.3; en; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
Mozilla/5.0 (Amiga; U; AmigaOS 1.3; en; rv:1.8.1.19) Gecko/20081204 SeaMonkey/1.1.14 
SeaMonkey 1.1.13 
Mozilla/5.0 (X11; U; Linux x86_64; es-ES; rv:1.8.1.18) Gecko/20081112 Fedora/1.1.13-1.fc10 SeaMonkey/1.1.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.18) Gecko/20081113 SeaMonkey/1.1.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.18) Gecko/20081113 Fedora/1.1.13-1.fc8 SeaMonkey/1.1.13 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.18) Gecko/20081030 SeaMonkey/1.1.13 (Ubuntu-1.1.13+nobinonly-0ubuntu1) 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.18) Gecko/20081031 SeaMonkey/1.1.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.18) Gecko/20081031 SeaMonkey/1.1.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.18) Gecko/20081031 SeaMonkey/1.1.13 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.1.18) Gecko/20081031 SeaMonkey/1.1.13 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; es-ES; rv:1.8.1.18) Gecko/20081031 SeaMonkey/1.1.13 
SeaMonkey 1.1.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.17) Gecko/20080922 SUSE/1.1.12-0.1 SeaMonkey/1.1.12 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.17) Gecko/20080829 SeaMonkey/1.1.12 (Ubuntu-1.1.12+nobinonly-0ubuntu1) 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.1.17) Gecko/20080925 Fedora/1.1.12-1.fc9 SeaMonkey/1.1.12 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.17) Gecko/20080829 SeaMonkey/1.1.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17) Gecko/20090224 SeaMonkey/1.1.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17) Gecko/20080829 SeaMonkey/1.1.12 Mnenhy/0.7.5.666 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8.1.17) Gecko/20080829 SeaMonkey/1.1.12 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.17) Gecko/20080829 SeaMonkey/1.1.12 
SeaMonkey 1.1.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080716 SeaMonkey/1.1.11 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080716 Fedora/1.1.11-1.fc8 SeaMonkey/1.1.11 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.16) Gecko/20080702 SeaMonkey/1.1.11 
Mozilla/5.0 (Windows; U; Windows NT 5.2; de-AT; rv:1.8.1.16) Gecko/20080702 SeaMonkey/1.1.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.8.1.16) Gecko/20080702 SeaMonkey/1.1.11 Mnenhy/0.7.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.16) Gecko/20080702 SeaMonkey/1.1.11 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.16) Gecko/20080702 MultiZilla/1.8.3.4e SeaMonkey/1.1.11 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8.1.16) Gecko/20080702 SeaMonkey/1.1.11 Mnenhy/0.7.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8.1.16) Gecko/20080702 SeaMonkey/1.1.11 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.8.1.16) Gecko/20080702 SeaMonkey/1.1.11 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.16) Gecko/20080703 SeaMonkey/1.1.11 
SeaMonkey 1.1.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; PL; rv:1.8.1.15) Gecko/20080621 SeaMonkey/1.1.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080621 SeaMonkey/1.1.10 Mnenhy/0.7.5.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080621 SeaMonkey/1.1.10 
SeaMonkey 1.1.1+ 
Mozilla/5.0 (OS/2; U; Warp 4.5; en-US; rv:1.8.1.3pre) Gecko/20070307 SeaMonkey/1.1.1+ 
SeaMonkey 1.1.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.2) Gecko/20070224 SeaMonkey/1.1.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.2) Gecko/20070221 SeaMonkey/1.1.1 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); fr; rv:1.8.1.2) Gecko/20070221 SeaMonkey/1.1.1 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.2) Gecko/20070221 SeaMonkey/1.1.1 
Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.8.1.2) Gecko/20070227 SeaMonkey/1.1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; PL; rv:1.8.1.2) Gecko/20070222 SeaMonkey/1.1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.2) Gecko/20070222 SeaMonkey/1.1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070222 SeaMonkey/1.1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.8.1.2) Gecko/20070222 SeaMonkey/1.1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.2) Gecko/20070222 SeaMonkey/1.1.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.2) Gecko/20070222 SeaMonkey/1.1.1 
Firefox/2.0b1 SeaMonkey/1.1.1 Mozilla/5.0 Gecko/20061101 
SeaMonkey 1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.2pre) Gecko/20070111 SeaMonkey/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.8.1.2pre) Gecko/20070111 SeaMonkey/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2pre) Gecko/20070111 SeaMonkey/1.1 Mnenhy/0.7.4.10005 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2pre) Gecko/20070111 SeaMonkey/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; fr-FR; rv:1.8.1.2pre) Gecko/20070111 SeaMonkey/1.1 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.1.2pre) Gecko/20070111 SeaMonkey/1.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.1.2pre) Gecko/20070111 SeaMonkey/1.1 
SeaMonkey 1.0b 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8) Gecko/20051219 SeaMonkey/1.0b 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8) Gecko/20060102 SeaMonkey/1.0b 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8) Gecko/20051219 SeaMonkey/1.0b 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-AT; rv:1.8) Gecko/20051219 SeaMonkey/1.0b 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8) Gecko/20051219 SeaMonkey/1.0b 
SeaMonkey 1.0a 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8b4) Gecko/20050910 SeaMonkey/1.0a 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8b4) Gecko/20050910 SeaMonkey/1.0a 
SeaMonkey 1.0.9 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.14eol) Gecko/20090422 CentOS/1.0.9-0.37.el3.centos3 SeaMonkey/1.0.9 
SeaMonkey 1.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070306 SeaMonkey/1.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070301 SUSE/1.8_seamonkey_1.0.8-0.1 SeaMonkey/1.0.8 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070223 Fedora/1.0.8-0.5.1.fc5 SeaMonkey/1.0.8 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.10) Gecko/20070306 SeaMonkey/1.0.8 
SeaMonkey 1.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20070104 Red Hat/1.0.7-0.6.fc5 SeaMonkey/1.0.7 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20061211 SeaMonkey/1.0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.9) Gecko/20061211 SeaMonkey/1.0.7 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.9) Gecko/20061211 SeaMonkey/1.0.7 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.9) Gecko/20061211 SeaMonkey/1.0.7 
SeaMonkey 1.0.6 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.0.8) Gecko/20061109 SeaMonkey/1.0.6 
Mozilla/5.0 (X11; U; Linux i686; fr-FR; rv:1.8.0.8) Gecko/20061029 SeaMonkey/1.0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.8) Gecko/20061030 SeaMonkey/1.0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.0.8) Gecko/20061030 SeaMonkey/1.0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; de-AT; rv:1.8.0.8) Gecko/20061030 SeaMonkey/1.0.6 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.8) Gecko/20061030 SeaMonkey/1.0.6 
SeaMonkey 1.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.7) Gecko/20060914 SeaMonkey/1.0.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.7) Gecko/20060910 SeaMonkey/1.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl-PL; rv:1.8.0.7) Gecko/20060910 SeaMonkey/1.0.5 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.7) Gecko/20060910 SeaMonkey/1.0.5 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.7) Gecko/20060910 SeaMonkey/1.0.5 
Mozilla/5.0 (OS/2; U; Warp 4.5; en-US; rv:1.8.0.7) Gecko/20060910 MultiZilla/1.8.2.0i SeaMonkey/1.0.5 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.0.7) Gecko/20060910 SeaMonkey/1.0.5 
SeaMonkey 1.0.4 
Mozilla/5.0 (X11; U; Linux ppc; en-US; rv:1.8.0.6) Gecko/20060815 SeaMonkey/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060803 SeaMonkey/1.0.4 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.6) Gecko/20060730 SeaMonkey/1.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.6) Gecko/20060729 SeaMonkey/1.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.0.6) Gecko/20060729 SeaMonkey/1.0.4 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.6) Gecko/20060729 SeaMonkey/1.0.4 
SeaMonkey 1.0.3 
Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.8.0.5) Gecko/20060805 CentOS/1.0.3-0.el4.1.centos4 SeaMonkey/1.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.8.0.5) Gecko/20060721 SeaMonkey/1.0.3 
SeaMonkey 1.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060619 SeaMonkey/1.0.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.4) Gecko/20060516 SeaMonkey/1.0.2 
SeaMonkey 1.0.1 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.2) Gecko/20060630 Red Hat/1.0.1-0.1.9.EL3 SeaMonkey/1.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.2) Gecko/20060404 SeaMonkey/1.0.1 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.2) Gecko/20060404 SeaMonkey/1.0.1 
SeaMonkey 1.0 
Mozilla/5.0 (X11; U; Linux i686; pl-PL; rv:1.8.0.1) Gecko/20060130 SeaMonkey/1.0 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.1) Gecko/20060316 SUSE/1.0-27 SeaMonkey/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU; rv:1.8.0.1) Gecko/20060130 SeaMonkey/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.1) Gecko/20060130 SeaMonkey/1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.8.0.1) Gecko/20060130 SeaMonkey/1.0 
Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.1) Gecko/20060130 SeaMonkey/1.0 
Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.8.0.1) Gecko/20060130 SeaMonkey/1.0 
SeaMonkey 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.8) Gecko/20071008 SeaMonkey 
Shiira 
Shiira is a web browser written in Cocoa. It uses the KHTML rendering engine provided by Apple’s Web Kit. Since this is the same rendering engine used by Safari, HTML content rendered by Shiira will look the same as in Apple’s own browser.

Click on any string to get more details

Shiira 1.2.3 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/419 (KHTML, like Gecko) Shiira/1.2.3 Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en_CA) AppleWebKit/522+ (KHTML, like Gecko) Shiira/1.2.3 Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko) Shiira/1.2.3 Safari/125 
Shiira 1.2.2 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/522.10.1 (KHTML, like Gecko) Shiira/1.2.2 Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko) Shiira/1.2.2 Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) Shiira/1.2.2 Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; de-de) AppleWebKit/312.8 (KHTML, like Gecko) Shiira/1.2.2 Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9.1 (KHTML, like Gecko) Shiira/1.2.2 Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) Shiira/1.2.2 Safari/125 
Shiira 1.2.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-pl) AppleWebKit/312.8 (KHTML, like Gecko) Shiira/1.2.1 Safari/125 
Shiira 1.1 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/417.9 (KHTML, like Gecko, Safari) Shiira/1.1 
Shiira 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/523.15.1 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/419 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/522.11.1 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/522.10.1 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/419.3 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/419.2.1 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; fr) AppleWebKit/418.9.1 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-au) AppleWebKit/523.10.3 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/419 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-us) AppleWebKit/531.21.8 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_11; en) AppleWebKit/528.16 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_11; en) AppleWebKit/525.18 (KHTML, like Gecko) Shiira Safari/125 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_11; en) AppleWebKit/525.13 (KHTML, like Gecko) Shiira Safari/125 
Shiretoko 
Shiretoko Alpha 1 is an early developer milestone for the next version of Firefox that is being built on top of Mozilla’s Gecko 1.9.1 layout engine

Click on any string to get more details

Shiretoko 3.5b5pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b5pre) Gecko/20090424 Shiretoko/3.5b5pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b5pre) Gecko/20090519 Shiretoko/3.5b5pre 
Shiretoko 3.5b4pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b4pre) Gecko/20090404 Shiretoko/3.5b4pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b4pre) Gecko/20090401 Ubuntu/9.04 (jaunty) Shiretoko/3.5b4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b4pre) Gecko/20090405 Shiretoko/3.5b4pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1b4pre) Gecko/20090420 Shiretoko/3.5b4pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b4pre) Gecko/20090413 Shiretoko/3.5b4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b4pre) Gecko/20090411 Shiretoko/3.5b4pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b4pre) Gecko/20090323 Shiretoko/3.5b4pre (.NET CLR 3.5.30729) 
Shiretoko 3.5.8pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.8pre) Gecko/20100112 Shiretoko/3.5.8pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.8pre) Gecko/20100110 Shiretoko/3.5.8pre 
Shiretoko 3.5.6 
Mozilla/5.0 (X11; U; Linux i686; ja; rv:1.9.1.6) Gecko/20091216 Shiretoko/3.5.6 
Shiretoko 3.5.5pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.5pre) Gecko/20091016 Shiretoko/3.5.5pre GTB6 
Shiretoko 3.5.5 
Mozilla/5.0 (X11; U; Darwin i386; en-US; rv:1.9.1.4) Gecko/20100311 Shiretoko/3.5.5 
Mozilla/5.0 (Windows; U; Windows NT 5.2; zh-TW; rv:1.9.1.5) Gecko/20091106 Shiretoko/3.5.5 (.NET CLR 3.5.30729) 
Shiretoko 3.5.4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.4pre) Gecko/20090921 Ubuntu/9.04 (jaunty) Shiretoko/3.5.4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.4pre) Gecko/20090921 Ubuntu/8.10 (intrepid) Shiretoko/3.5.4pre 
Shiretoko 3.5.3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.3pre) Gecko/20090803 Ubuntu/9.04 (jaunty) Shiretoko/3.5.3pre (.NET CLR 3.5.30729) 
Shiretoko 3.5.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.3pre) Gecko/20090730 Ubuntu/9.04 (jaunty) Shiretoko/3.5.2 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.2) Gecko/20090803 Ubuntu/9.04 (jaunty) Shiretoko/3.5.2 FirePHP/0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.2) Gecko/20090805 Shiretoko/3.5.2 
Shiretoko 3.5.1 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1) Gecko/20090716 Ubuntu/9.04 (jaunty) Shiretoko/3.5.1 
Shiretoko 3.5 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1pre) Gecko/20090701 Ubuntu/9.04 (jaunty) Shiretoko/3.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1) Gecko/20090701 Ubuntu/9.10 (karmic) Shiretoko/3.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1) Gecko/20090701 Linux Mint/7 (Gloria) Shiretoko/3.5 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1) Gecko/20090630 Ubuntu/9.04 (jaunty) Shiretoko/3.5 
Shiretoko 3.1b4pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b4pre) Gecko/20090311 Ubuntu/9.04 (jaunty) Shiretoko/3.1b4pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b4pre) Gecko/20090311 Shiretoko/3.1b4pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b4pre) Gecko/20090307 Shiretoko/3.1b4pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.9.1b4pre) Gecko/20090308 Shiretoko/3.1b4pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.1; bg-BG; rv:1.9.1b4pre) Gecko/20090307 Shiretoko/3.1b4pre 
Shiretoko 3.1b3pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b3pre) Gecko/20090109 Shiretoko/3.1b3pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b3pre) Gecko/20081223 Shiretoko/3.1b3pre 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b3pre) Gecko/20081222 Shiretoko/3.1b3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b3pre) Gecko/20090106 Shiretoko/3.1b3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b3pre) Gecko/20090105 Shiretoko/3.1b3pre 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b3pre) Gecko/20081203 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 6.1; pt-BR; rv:1.9.1b3pre) Gecko/20090103 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b3pre) Gecko/20081207 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1b3pre) Gecko/20081204 Shiretoko/3.1b3pre (.NET CLR 3.5.30729) 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1b3pre) Gecko/20090105 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1b3pre) Gecko/20090104 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.9.1b3pre) Gecko/20090205 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20090207 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20090121 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20090113 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20090102 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20081228 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20081221 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20081218 Shiretoko/3.1b3pre 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1b3pre) Gecko/20081212 Shiretoko/3.1b3pre

More Shiretoko 3.1b3pre user agents strings –>>

Sleipnir 
Japanese tabbed web browser, released by Fenrir Inc. The browser’s layout engine can be changed to either Internet Explorer’s Trident or Mozilla’s Gecko.

Click on any string to get more details

Sleipnir 2.9.3 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2; Sleipnir/2.9.3) 
Sleipnir 2.9.2 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 1.1.4322; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB6.3; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 1.1.4322; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; GTB6.3; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; .NET CLR 1.1.4322; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.2; .NET CLR 2.0.50727; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.2; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Sleipnir/2.9.2) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; Sleipnir/2.9.2) 
Sleipnir 2.9.1 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1; Sleipnir/2.9.1) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Sleipnir/2.9.1) 
Sleipnir 2.8.5 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; OfficeLiveConnector.1.4; OfficeLivePatch.1.3; .NET CLR 3.0.30729; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618; FDM; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; GTB6; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SV1; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 4.0.20506; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; InfoPath.2; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 1.0.3705; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; msn OptimizedIE8;JAJP; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; FDM; Sleipnir/2.8.5) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 1.1.4322; Sleipnir/2.8.5) 
Sleipnir 2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; OfficeLiveConnector.1.3; OfficeLivePatch.1.3) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/4.0; MathPlayer 2.10d; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; OfficeLiveConnector.1.3; OfficeLivePatch.1.3; .NET CLR 3.5.30729; .NET CLR 3.0.30618; .NET CLR 1.1.4322) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; WOW64; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; User-agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1); .NET CLR 2.0.50727; .NET CLR 1.1.4322) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; User-agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1); .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; FunWebProducts-AskJeevesJapan; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.8.4 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; FDM) Sleipnir/2.8.4 
Sleipnir 2.8.3 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.8.3 
Sleipnir 2.8.1 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Sleipnir/2.8.1 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Sleipnir/2.8.1 
Sleipnir 2.8.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; GTB5; .NET CLR 1.1.4322; .NET CLR 2.0.50727) Sleipnir/2.8.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648) Sleipnir/2.8.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) Sleipnir/2.8.0 
Sleipnir 2.7.2 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; Media Center PC 5.0) Sleipnir/2.7.2 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) Sleipnir/2.7.2 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) Sleipnir/2.7.2 
Sleipnir 2.7.1 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30) Sleipnir/2.7.1 
Sleipnir 2.7.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 2.0.50727; InfoPath.1; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648) Sleipnir/2.7.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322) Sleipnir/2.7.0 
Sleipnir 2.6.1 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506) Sleipnir/2.6.1 
Sleipnir 2.6.0 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30) Sleipnir/2.6.0 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) Sleipnir/2.6.0 
Sleipnir 2.5.17 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.04506; InfoPath.1) Sleipnir/2.5.17 
Sleipnir 2.5.12 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; InfoPath.1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729) Sleipnir/2.5.12
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) Sleipnir/2.5.12 
Sleipnir 2.49 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727) Sleipnir/2.49 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) Sleipnir/2.49 
Sleipnir 2.48 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) Sleipnir/2.48 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322) Sleipnir/2.48 
Sleipnir 2.46 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; GTB6; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022) Sleipnir/2.46 
Sleipnir 2.41 
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727) Sleipnir/2.41 
Sleipnir 2.30 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; Media Center PC 3.1; .NET CLR 2.0.50727; .NET CLR 1.1.4322) Sleipnir/2.30 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) Sleipnir/2.30 
Sleipnir 2.21 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.1) Sleipnir/2.21 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322) Sleipnir/2.21 
Sleipnir 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Sleipnir 2.8.4) 
Stainless 
Multi-process browser from Mesa Dynamics for OS X Leopard

Click on any string to get more details

Stainless 0.5.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.16 (KHTML, like Gecko) Stainless/0.5.3 Safari/525.20.1 
Stainless 0.4.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; es-es) AppleWebKit/525.27.1 (KHTML, like Gecko) Stainless/0.4.5 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; zh-tw) AppleWebKit/525.27.1 (KHTML, like Gecko) Stainless/0.4.5 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/525.27.1 (KHTML, like Gecko) Stainless/0.4.5 Safari/525.20.1 
Stainless 0.4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; zh-tw) AppleWebKit/525.27.1 (KHTML, like Gecko) Stainless/0.4 Safari/525.20.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/525.27.1 (KHTML, like Gecko) Stainless/0.4 Safari/525.20.1 
Stainless 0.3.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/528.1 (KHTML, like Gecko) Stainless/0.3.5 Safari/525.20.1 
Stainless 0.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; zh-tw) AppleWebKit/525.18 (KHTML, like Gecko) Stainless/0.3 Safari/525.20.1 
Stainless 0.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_4; en-us) AppleWebKit/528.1 (KHTML, like Gecko) Version/4.0 Safari/528.1 Stainless/0.1 
Sunrise 
Sunrise is the open-source web browser that based on WebKit framework for Mac. The concept is to add some convenient functions that the other browsers have not equipped yet. It is using the same rendering engine as Safari.

Click on any string to get more details

Sunrise 4.0.1 
Mozilla/6.0 (X11; U; Linux x86_64; en-US; rv:2.9.0.3) Gecko/2009022510 FreeBSD/ Sunrise/4.0.1/like Safari 
Sunrise 1.7.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; ja-jp) AppleWebKit/525.18 (KHTML, like Gecko) Sunrise/1.7.5 like Safari/5525.20.1 
Sunrise 1.7.4 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_11; en) AppleWebKit/525.18 (KHTML, like Gecko) Sunrise/1.7.4 like Safari/4525.22 
Sunrise 1.7.1 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-us) AppleWebKit/525.18 (KHTML, like Gecko) Sunrise/1.7.1 like Safari/5525.18 
Sunrise 1.6.5 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9.1 (KHTML, like Gecko) Sunrise/1.6.5 like Safari/419.3 
Sunrise 1.6.0 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; fr) AppleWebKit/523.12.2 (KHTML, like Gecko) Sunrise/1.6.0 like Safari/523.12.2 
Sunrise 0.895 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.7 (KHTML, like Gecko) SunriseBrowser/0.895 
Sunrise 0.853 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.7 (KHTML, like Gecko) SunriseBrowser/0.853 
Sunrise 0.84 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.7 (KHTML, like Gecko) SunriseBrowser/0.84 
Sunrise 0.833 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/125.5.7 (KHTML, like Gecko) SunriseBrowser/0.833 
TeaShark 
Mobile web browser for Java MIDP 2.0

Click on any string to get more details

TeaShark 0.8 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 TeaShark/0.8 
uZard Web 
Mobile web browser from Logicplant

Click on any string to get more details

uZard Web 1.0 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.2; WOW64; Trident/4.0; uZardWeb/1.0; Server_USA) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.2; WOW64; Trident/4.0; uZardWeb/1.0; Server_KO_KTF) 
Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.2; WOW64; Trident/4.0; uZard/1.0; Server_KO_SKT) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; WOW64; SV1; uZardWeb/1.0; Server_HK) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; WOW64; SV1; uZardWeb/1.0; Server_EN) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; WOW64; SV1; uZardWeb/1.0; Server_CN) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; uZardWeb/1.0; Server_JP) 
uzbl 
minimal browser for unix systems

Click on any string to get more details

uzbl 
Webkit/1.1.8 (Linux; en_US) Uzbl 
Webkit/1.1.8 (Linux; en-us) Uzbl 
Uzbl (X11; U; Arch Linux; de-DE) Webkit/1.1.10 
Uzbl (X11; U; Arch Linux i686; de-DE) Webkit/1.1.10 
Uzbl (Webkit 1.1.9) (Linux) 
uzbl (Webkit 1.1.9) (Linux 2.6.30-ARCH) 
uzbl (Webkit 1.1.9) (Linux 2.6.29-ARCH) 
Uzbl (Webkit 1.1.12) 
uzbl (Webkit 1.1.10) (Linux 2.6.30-ARCH) 
Uzbl (Webkit 1.1.10) (Arch Linux) 
Vonkeror 
Gecko browser based on Conkeror and XUL-runner

Click on any string to get more details

Vonkeror 1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1pre) Gecko/20090629 Vonkeror/1.0 
w3m 
Text-based web browser

Click on any string to get more details

w3m 0.52 
w3m/0.52 
w3m 0.5.2 
w3m/0.5.2 
w3m 0.5.1+cvs-1.968 
w3m/0.5.1+cvs-1.968 
w3m 0.5.1 
w3m/0.5.1 
w3m 0.2.1 
w3m/0.2.1 
w3m 0.1.9 
w3m/0.1.9 
WorldWideWeb 
The first web browser !! Written in 1990 by Tim Berners-Lee. Much later it was renamed Nexus in order to save confusion between the program and the abstract information space (which is now spelled World Wide Web with spaces).

Click on any string to get more details

WorldWideWeb 
WorldWideweb (NEXT) 
Wyzo 
Web browser based on Mozilla Firefox

Click on any string to get more details

Wyzo 3.5.6.1 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.6) Gecko/20100121 Firefox/3.5.6 Wyzo/3.5.6.1 
Wyzo 3.5.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20100121 Firefox/3.5.6 Wyzo/3.5.6 
Wyzo 3.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042815 Firefox/3.0.10 Wyzo/3.0.4 
Wyzo 3.0.3 
Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.0.9) Gecko/2009042410 Firefox/3.0.9 Wyzo/3.0.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.9) Gecko/2009042410 Firefox/3.0.9 Wyzo/3.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.0.9) Gecko/2009042410 Firefox/3.0.9 Wyzo/3.0.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.9) Gecko/2009042410 Firefox/3.0.9 Wyzo/3.0.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.0.9) Gecko/2009042318 Firefox/3.0.9 Wyzo/3.0.3 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.4; en-US; rv:1.9.0.9) Gecko/2009042318 Firefox/3.0.9 Wyzo/3.0.3 GTB6 
Wyzo 3.0.2 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.4; en-US; rv:1.9.0.9) Gecko/2009042318 Firefox/3.0.9 Wyzo/3.0.2 
Wyzo 0.5.3 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.6) Gecko/20070801 Firefox/2.0 Wyzo/0.5.3 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070801 Firefox/2.0 Wyzo/0.5.3 
CONSOLES 
libnup

Click on any string to get more details

libnup 1.0 
wii libnup/1.0 
Playstation 3

Click on any string to get more details

Playstation 3 2.00 
Mozilla/5.0 (PLAYSTATION 3; 2.00) 
Playstation 3 1.90 
Mozilla/5.0 (PLAYSTATION 3; 1.90) 
Playstation 3 1.70 
Mozilla/5.0 (PLAYSTATION 3; 1.70) 
Playstation 3 1.5 
Mozilla/5.0 (PLAYSTATION 3; 1.5) 
Playstation 3 1.10 
Mozilla/5.0 (PLAYSTATION 3; 1.10) 
Playstation 3 1.00 
Mozilla/5.0 (PLAYSTATION 3; 1.00) 
Mozilla/4.0 (PS3 (PlayStation 3); 1.00) 
Mozilla/5.0 (PLAYSTATION 3; 1.0) 
Playstation Portable

Click on any string to get more details

Playstation Portable 2.00 
PSP (PlayStation Portable); 2.00 
Mozilla/4.0 (PSP (PlayStation Portable); 2.00) 
CRAWLERS 
ABACHOBot 
Abacho’s spider. German based portal and search engine. Has localized versions in the following countries: Austria, Switzerland, France, UK, Spain, Italy, Sweden and Turkey.

Click on any string to get more details

ABACHOBot 
ABACHOBot 
Accoona-AI-Agent 
Accoona’s webcrawler

Click on any string to get more details

Accoona-AI-Agent 1.1.2 
Accoona-AI-Agent/1.1.2 (aicrawler at accoonabot dot com) 
Accoona-AI-Agent 1.1.1 
Accoona-AI-Agent/1.1.1 (crawler at accoona dot com) 
AnyApexBot 
Crawler for the web directory AnyApex

Click on any string to get more details

AnyApexBot 1.0 
Mozilla/5.0 (compatible; AnyApexBot/1.0; +http://www.anyapex.com/bot.html) 
Arachmo 
Japanese Crawler. Seems to be a download tool. Here’s some information in japanese. If you can translate than, please let me know

Click on any string to get more details

Arachmo 
Mozilla/4.0 (compatible; Arachmo) 
B-l-i-t-z-B-O-T 
Crawler for the German search engine tricus. Spiders German, Dutch, Swiss and Austrian websites. Same as BlitzBOT

Click on any string to get more details

B-l-i-t-z-B-O-T 
Mozilla/4.0 (compatible; B-l-i-t-z-B-O-T) 
Baiduspider 
Crawler for the chinese search engine Baidu

Click on any string to get more details

Baiduspider 
Baiduspider+(+http://www.baidu.com/search/spider_jp.html) 
Baiduspider+(+http://www.baidu.com/search/spider.htm) 
BaiDuSpider 
BecomeBot 
Become crawler. Shopping related portal

Click on any string to get more details

BecomeBot 3.0 
Mozilla/5.0 (compatible; BecomeBot/3.0; MSIE 6.0 compatible; +http://www.become.com/site_owners.html) 
BecomeBot 2.3 
Mozilla/5.0 (compatible; BecomeBot/2.3; MSIE 6.0 compatible; +http://www.become.com/site_owners.html) 
Bimbot 
Unknown crawler, gives no information. IP address belongs to Backbone Communications Inc. (BBCOM). Provides converged data and voice services

Click on any string to get more details

Bimbot 1.0 
Bimbot/1.0 
BlitzBOT 
Crawler for the German search engine tricus. Spiders German, Dutch, Swiss and Austrian websites. Same as B-l-i-t-z-B-O-T

Click on any string to get more details

BlitzBOT 
Mozilla/4.0 (compatible; BlitzBot) 
BlitzBOT@tricus.net (Mozilla compatible) 
BlitzBOT@tricus.com (Mozilla compatible) 
boitho.com-dc 
Boitho’s Web Crawler, a distributed crawler that downloads web pages to build the database used by Boitho.com to search in. To allow volunteers to donate their superfluous bandwidth and idle CPU time, they have developed a distributed crawler, like seti@home and Grub. That way people can install a program on their computers and help them with the crawling.

Click on any string to get more details

boitho.com-dc 0.85 
boitho.com-dc/0.85 ( http://www.boitho.com/dcbot.html ) 
boitho.com-dc 0.83 
boitho.com-dc/0.83 ( http://www.boitho.com/dcbot.html ) 
boitho.com-dc 0.82 
boitho.com-dc/0.82 ( http://www.boitho.com/dcbot.html ) 
boitho.com-dc 0.81 
boitho.com-dc/0.81 ( http://www.boitho.com/dcbot.html ) 
boitho.com-dc 0.79 
boitho.com-dc/0.79 ( http://www.boitho.com/dcbot.html ) 
boitho.com-robot 
This is an old version of Boitho’s boitho.com-dc. It was a more traditional webrobot, run on computers controlled by Boitho, while boitho.com-dc is a distributed crawler run on the computers of volunteers. 
The boitho.com-robot isn抰 in use any more.

Click on any string to get more details

boitho.com-robot 1.1 
boitho.com-robot/1.1 
boitho.com-robot 1.0 
boitho.com-robot/1.0 
btbot 
btbot’s search engine for bittorrents, ringtones for cell phones, friends and extraterrestrial intelligence

Click on any string to get more details

btbot 0.4 
btbot/0.4 (+http://www.btbot.com/btbot.html) 
Cerberian Drtrs

Click on any string to get more details

Cerberian Drtrs 3.2 
Mozilla/4.0 (compatible; Cerberian Drtrs Version-3.2-Build-1) 
Mozilla/4.0 (compatible; Cerberian Drtrs Version-3.2-Build-0) 
Charlotte 
Charlotte is a spider created by Searchme, Inc. in Mountain View, CA

Click on any string to get more details

Charlotte 1.1 
Mozilla/5.0 (compatible; Charlotte/1.1; http://www.searchme.com/support/) 
Charlotte 1.0t 
Mozilla/5.0 (compatible; Charlotte/1.0t; http://www.searchme.com/support/) 
Charlotte 1.0b 
Mozilla/5.0 (compatible; Charlotte/1.0b; http://www.searchme.com/support/) 
Mozilla/5.0 (compatible; Charlotte/1.0b; http://www.betaspider.com/) 
Charlotte 0.9t 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.11) Gecko/20080109 (Charlotte/0.9t; http://www.searchme.com/support/) (Charlotte/0.9t; http://www.searchme.com/support/) 
Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.11) Gecko/20080109 (Charlotte/0.9t; http://www.searchme.com/support/) 
Mozilla/5.0 (compatible; Charlotte/0.9t; http://www.searchme.com/support/) 
Mozilla/5.0 (compatible; Charlotte/0.9t; +http://www.searchme.com/support/) 
ConveraCrawler 
ConveraCrawler is an experimental web crawler under development since April 2004. ConveraCrawler is owned and operated by Convera Corporation

Click on any string to get more details

ConveraCrawler 0.9d 
ConveraCrawler/0.9d (+http://www.authoritativeweb.com/crawl) 
ConveraCrawler/0.9d ( http://www.authoritativeweb.com/crawl) 
ConveraCrawler 0.9 
ConveraCrawler/0.9 (+http://www.authoritativeweb.com/crawl) 
cosmos 
Crawler from xyleme which indexes XML content on the web.

Click on any string to get more details

cosmos 0.9 
cosmos/0.9_(robot@xyleme.com) 
DataparkSearch 
Open source web-based search engine released under the GNU General Public License and designed to organize search within a website, group of websites, intranet or local system. DataparkSearch consists of two parts. The first part is indexing mechanism (indexer). Indexer walks over html hypertext references and stores found words and new references into database. The second part is web CGI front-end to provide search using data collected by indexer.

Click on any string to get more details

DataparkSearch 4.37 
DataparkSearch/4.37-23012006 ( http://www.dataparksearch.org/) 
DataparkSearch 4.36 
DataparkSearch/4.36 ( http://www.dataparksearch.org/) 
DataparkSearch 4.35 
DataparkSearch/4.35-02122005 ( http://www.dataparksearch.org/) 
DataparkSearch/4.35 ( http://www.dataparksearch.org/) 
DiamondBot 
Crawler for Claria (formerly Gator). Adware company

Click on any string to get more details

DiamondBot 
DiamondBot 
Discobot 
Discobot is the experimental web crawler for Discovery Engine

Click on any string to get more details

Discobot 1.0 
Mozilla/5.0 (compatible; discobot/1.0; +http://discoveryengine.com/discobot.html) 
EmeraldShield.com WebBot 
Crawls domains as part of a spam and web filtration services. If a site is determined to contain questionable, or objectionable content it will be added to a blocklist. Ignores the robots.txt file

Click on any string to get more details

EmeraldShield.com WebBot 
EmeraldShield.com WebBot (http://www.emeraldshield.com/webbot.aspx) 
envolk[ITS]spider 
envolk search engine spider [ITS] Internet Tracking Spider(TM)

Click on any string to get more details

envolk[ITS]spider 1.6 
envolk[ITS]spider/1.6 (+http://www.envolk.com/envolkspider.html) 
envolk[ITS]spider/1.6 ( http://www.envolk.com/envolkspider.html) 
EsperanzaBot 
Web Crawler of Esperanza Consulting LTD

Click on any string to get more details

EsperanzaBot 
EsperanzaBot(+http://www.esperanza.to/bot/) 
Exabot 
Exava shopping search engine, belongs now to Become

Click on any string to get more details

Exabot 2.0 
Exabot/2.0 
FAST Enterprise Crawler 
Product of the norvegian company Fast. Part of their FAST ProPublish solution for gathering, processing and delivering reference material to online and offline users.

Click on any string to get more details

FAST Enterprise Crawler 6 
FAST Enterprise Crawler 6 used by Schibsted (webcrawl@schibstedsok.no) 
FAST Enterprise Crawler 6 / Scirus scirus-crawler@fast.no; http://www.scirus.com/srsapp/contactus/ 
FAST Enteprise Crawler/6 (www dot fastsearch dot com) 
FAST-WebCrawler 
Crawler for the Fast search engine

Click on any string to get more details

FAST-WebCrawler 3.x 
FAST-WebCrawler/3.x Multimedia (mm dash crawler at fast dot no) 
FAST-WebCrawler/3.x Multimedia 
FAST-WebCrawler 3.8 
FAST-WebCrawler/3.8 (atw-crawler at fast dot no; http://fast.no/support/crawler.asp) 
FAST-WebCrawler 3.7 
FAST-WebCrawler/3.7/FirstPage (atw-crawler at fast dot no;http://fast.no/support/crawler.asp) 
FAST-WebCrawler/3.7 (atw-crawler at fast dot no; http://fast.no/support/crawler.asp) 
FAST-WebCrawler 3.6 
FAST-WebCrawler/3.6/FirstPage (atw-crawler at fast dot no;http://fast.no/support/crawler.asp) 
FAST-WebCrawler/3.6 (atw-crawler at fast dot no; http://fast.no/support/crawler.asp) 
FAST-WebCrawler/3.6 
FDSE robot 
Search engine of Fluid Dynamics Software Corporation

Click on any string to get more details

FDSE robot 
Mozilla/4.0 (compatible: FDSE robot) 
FindLinks 
A project of the Automated Speech Processing Group at the Institute of Computer Science at Universit盲t Leipzig.

Click on any string to get more details

FindLinks 1.1.4-beta1 
findlinks/1.1.4-beta1 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.3-beta9 
findlinks/1.1.3-beta9 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.3-beta8 
findlinks/1.1.3-beta8 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.3-beta6 
findlinks/1.1.3-beta6 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.3-beta4 
findlinks/1.1.3-beta4 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.3-beta2 
findlinks/1.1.3-beta2 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.3-beta1 
findlinks/1.1.3-beta1 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.2-a5 
findlinks/1.1.2-a5 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.1-a5 
findlinks/1.1.1-a5 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.1-a1 
findlinks/1.1.1-a1 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1.1 
findlinks/1.1.1 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1-a9 
findlinks/1.1-a9 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1-a8 
findlinks/1.1-a8 (+http://wortschatz.uni-leipzig.de/findlinks/) 
findlinks/1.1-a8 ( http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1-a7 
findlinks/1.1-a7 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1-a5 
findlinks/1.1-a5 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1-a4 
findlinks/1.1-a4 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1-a3 
findlinks/1.1-a3 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.1 
findlinks/1.1 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.06 
findlinks/1.06 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.0.9 
findlinks/1.0.9 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.0.8 
findlinks/1.0.8 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FindLinks 1.0 
findlinks/1.0 (+http://wortschatz.uni-leipzig.de/findlinks/) 
FurlBot 
Furl’s crawler. Furl is a social bookmark service from LookSmart

Click on any string to get more details

FurlBot Furl Search 2.0 
Mozilla/4.0 compatible FurlBot/Furl Search 2.0 (FurlBot; http://www.furl.net; wn.furlbot@looksmart.net) 
FyberSpider 
FyberSearch web crawler

Click on any string to get more details

FyberSpider 
FyberSpider (+http://www.fybersearch.com/fyberspider.php) 
FyberSpider 
g2crawler 
g2crawler : Gnutella2Crawler codename Aenea. Not in use anymore.

Click on any string to get more details

g2crawler 
g2Crawler nobody@airmail.net 
Gaisbot 
Gais – Global Area Information Servers – Search enginge crawler of the National Chung Cheng University Taiwan

Click on any string to get more details

Gaisbot 3.0+ 
Gaisbot/3.0+(robot06@gais.cs.ccu.edu.tw;+http://gais.cs.ccu.edu.tw/robot.php) 
Gaisbot 3.0 
Gaisbot/3.0+(robot05@gais.cs.ccu.edu.tw;+http://gais.cs.ccu.edu.tw/robot.php) 
Gaisbot/3.0 (jerry_wu@openfind.com.tw; http://gais.cs.ccu.edu.tw/robot.php) 
GalaxyBot 
Browser for Galaxy Classifieds, a searchable directory.

Click on any string to get more details

GalaxyBot 1.0 
GalaxyBot/1.0 (http://www.galaxy.com/galaxybot.html) 
genieBot 
Web-indexing robot of GenieKnows Local Search Engine

Click on any string to get more details

genieBot 
genieBot (http://64.5.245.11/faq/faq.html) 
genieBot ((http://64.5.245.11/faq/faq.html)) 
Gigabot 
Gigablast’s indexing agent

Click on any string to get more details

Gigabot 3.0 
Gigabot/3.0 (http://www.gigablast.com/spider.html) 
Gigabot 2.0 
Gigabot/2.0/gigablast.com/spider.html 
Gigabot/2.0 (http://www.gigablast.com/spider.html) 
Gigabot/2.0 
Gigabot 1.0 
Gigabot/1.0 
Girafabot

Click on any string to get more details

Girafabot 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322; Girafabot [girafa.com]) 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 4.0; Girafabot; girafabot at girafa dot com; http://www.girafa.com) 
Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; Girafabot; girafabot at girafa dot com; http://www.girafa.com) 
Googlebot

Click on any string to get more details

Googlebot 2.1 
Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html) 
Googlebot/2.1 (+http://www.googlebot.com/bot.html) 
Googlebot/2.1 (+http://www.google.com/bot.html) 
Googlebot-Image 
Google’s image crawler

Click on any string to get more details

Googlebot-Image 1.0 
Googlebot-Image/1.0 
hl_ftien_spider 
Web Crawler from China. IP addresses belong to Qipusi Technology Ltd and Rongzhengwuye-ltd from Tjanjin city

Click on any string to get more details

hl_ftien_spider 1.1 
hl_ftien_spider_v1.1 
hl_ftien_spider 
hl_ftien_spider 
htdig 
Crawler of the ht://Dig Group’s software package, a system for indexing and searching a finite (not necessarily small) set of sites or intranet. It is not meant to replace any of the many internet-wide search engines. htdig retrieves HTML documents using the HTTP protocol.

Click on any string to get more details

htdig 3.1.6 
htdig/3.1.6 (unconfigured@htdig.searchengine.maintainer) 
htdig/3.1.6 (mathieu.peltier@inrialpes.fr) 
htdig 3.1.5 
htdig/3.1.5 (webmaster@online-medien.de) 
htdig/3.1.5 (root@localhost) 
htdig/3.1.5 (infosys@storm.rmi.org) 
ia_archiver 
Alexa Web crawler

Click on any string to get more details

ia_archiver 
ia_archiver 
ichiro 
Japanese Webcrawler for Goo

Click on any string to get more details

ichiro 2.0 
ichiro/2.0 (ichiro@nttr.co.jp) 
ichiro/2.0 (http://help.goo.ne.jp/door/crawler.html) 
IRLbot 
IRL-crawler is a Texas A&M University research project sponsored in part by the National Science Foundation that investigates algorithms for mapping the topology of the Internet and discovering the various parts of the web. The crawler downloads random web pages (text only) and follows certain links to find other websites.

Click on any string to get more details

IRLbot 2.0 
IRLbot/2.0 (compatible; MSIE 6.0; http://irl.cs.tamu.edu/crawler) 
IRLbot/2.0 (+http://irl.cs.tamu.edu/crawler) 
IRLbot/2.0 ( http://irl.cs.tamu.edu/crawler) 
IssueCrawler 
Govcom.org Foundation’s web bot. Locates and visualizes networks on the Web. The Issue Crawler is used by NGOs and other researchers to answer questions about specific networks and effective networking more generally. You also may do in-depth research with the software. You need an account to use it.

Click on any string to get more details

IssueCrawler 
IssueCrawler 
Jyxobot 
Czech Webcrawler for Jyxo

Click on any string to get more details

Jyxobot 1 
Jyxobot/1 
LapozzBot 
Hungarian bot. Spiders for the Lapozz search engine. 
躣v鰖l鰉 !?!

Click on any string to get more details

LapozzBot 1.4 
LapozzBot/1.4 (+http://robot.lapozz.com) 
Larbin 
Multi-purpose web crawler

Click on any string to get more details

Larbin xy250 
larbin_xy250 larbin2.6.3@unspecified.mail 
Larbin spider@download11.co 
LarbinWebCrawler spider@download11.com 
Larbin larbin2.6.3@unspecif 
cn_web_viewer_web larbin2.6.3@unspecified.mail 
Larbin 5.0 
Mozilla/5.0 larbin@unspecified.mail 
Larbin 2.6.3 
larbin_2.6.3 zumesun@hotmail.com 
larbin_2.6.3 tangyi858@163.com 
larbin_2.6.3 ltaa_web_crawler@groupes.epfl.ch 
larbin_2.6.3 larbin2.6.3@unspecified.mail 
larbin_2.6.3 gqnmgsp@ruc.edu.cn 
larbin_2.6.3 ghary@sohu.com 
larbin_2.6.3 capveg@cs.umd.edu 
larbin_2.6.3 (wgao@genieknows.com) 
larbin_2.6.3 (ltaa_web_crawler@groupes.epfl.ch) 
larbin_2.6.3 (larbin@behner.org) 
larbin_2.6.3 (larbin2.6.3@unspecified.mail) 
Larbin 2.6.2 
larbin_2.6.2 vitalbox1@hotmail.com 
larbin_2.6.2 pierre@micro-fun.ch 
larbin_2.6.2 listonATccDOTgatechDOTedu 
larbin_2.6.2 larbin@correa.org 
larbin_2.6.2 larbin2.6.2@unspecified.mail 
larbin_2.6.2 kalou@kalou.net 
larbin_2.6.2 dthunen@princeton.edu 
larbin_2.6.2 (vitalbox1@hotmail.com) 
larbin_2.6.2 (pierre@micro-fun.ch) 
larbin_2.6.2 (larbin@correa.org) 
larbin_2.6.2 (larbin2.6.2@unspecified.mail) 
Larbin 2.6.1 
larbin_2.6.1 larbin2.6.1@unspecified.mail 
Larbin 2.5.0 
larbin_2.5.0 (larbin2.5.0@unspecified.mail) 
Larbin 
larbin_test nobody@airmail.etn 
larbin_test (nobody@airmail.etn) 
LARBIN-EXPERIMENTAL efp@gmx.net 
LinkWalker 
SEVENtwentyfour Inc Link Checker

Click on any string to get more details

LinkWalker 2.0 
LinkWalker/2.0 
LinkWalker 
LinkWalker 
lmspider 
Collects text from the web as part of a research project at Scansoft (renamed Nuance) ,trying to use web documents to improve the linguistic models used in their speech recognition engine

Click on any string to get more details

lmspider 
lmspider lmspider@scansoft.com 
lmspider (lmspider@scansoft.com) 
lwp-trivial 
lwp-trivial is the user-agent associated with the Perl code Module LWP::Simple

Click on any string to get more details

lwp-trivial 1.41 
lwp-trivial/1.41 
lwp-trivial 1.38 
lwp-trivial/1.38 
lwp-trivial 1.36 
lwp-trivial/1.36 
lwp-trivial 1.35 
lwp-trivial/1.35 
lwp-trivial 1.33 
lwp-trivial/1.33 
mabontland 
Crawler for the web directory mabontland

Click on any string to get more details

mabontland 
http://www.mabontland.com 
magpie-crawler 
Crawler for Brandwatch

Click on any string to get more details

magpie-crawler 1.1 
magpie-crawler/1.1 (U; Linux amd64; en-GB; +http://www.brandwatch.net) 
Mediapartners-Google 
Unregistered versions of opera prior to 8.5 contained advertising. To serve up relevant adverts based on what you are browsing Google provided these adverts. 
More information

Click on any string to get more details

Mediapartners-Google 2.1 
Mediapartners-Google/2.1 
MJ12bot 
Majestic-12 Web Crawler

Click on any string to get more details

MJ12bot v1.2.4 
Mozilla/5.0 (compatible; MJ12bot/v1.2.4; http://www.majestic12.co.uk/bot.php?+) 
MJ12bot v1.2.3 
Mozilla/5.0 (compatible; MJ12bot/v1.2.3; http://www.majestic12.co.uk/bot.php?+) 
MJ12bot v1.0.8 
MJ12bot/v1.0.8 (http://majestic12.co.uk/bot.php?+) 
MJ12bot v1.0.7 
MJ12bot/v1.0.7 (http://majestic12.co.uk/bot.php?+) 
MJ12bot v1.0.6 
MJ12bot/v1.0.6 (http://majestic12.co.uk/bot.php?+) 
MJ12bot v1.0.5 
MJ12bot/v1.0.5 (http://majestic12.co.uk/bot.php?+) 
Mnogosearch 
Web search engine software for intranet and internet servers from Mnogosearch.org (a project of Lavtech)

Click on any string to get more details

Mnogosearch 3.1.21 
Mnogosearch-3.1.21 
mogimogi 
Unclear. The IP address belongs to Goo but they don’t give any information about that bot. Goo itself uses ichiro for their search engine

Click on any string to get more details

mogimogi 1.0 
mogimogi/1.0 
MojeekBot 
MojeekBot (formerly Citenikbot) is the web crawler for the Mojeek search engine.

Click on any string to get more details

MojeekBot 2.0 
Mozilla/5.0 (compatible; MojeekBot/2.0; http://www.mojeek.com/bot.html) 
MojeekBot 0.2 
MojeekBot/0.2 (archi; http://www.mojeek.com/bot.html) 
Morning Paper 
Crawler for Boutell.com.

Click on any string to get more details

Morning Paper 1.0 
Morning Paper 1.0 (robots.txt compliant!) 
msnbot 
MSN (or Microsoft Service Network) Search Web Crawler

Click on any string to get more details

msnbot 2.1 
msnbot/2.1 
msnbot 2.0b 
msnbot/2.0b 
msnbot 1.1 
msnbot/1.1 (+http://search.msn.com/msnbot.htm) 
msnbot/1.1 
msnbot 1.0 
msnbot/1.0 (+http://search.msn.com/msnbot.htm) 
msnbot 0.9 
msnbot/0.9 (+http://search.msn.com/msnbot.htm) 
msnbot 0.11 
msnbot/0.11 ( http://search.msn.com/msnbot.htm) 
msnbot 0.1 
MSNBOT/0.1 (http://search.msn.com/msnbot.htm) 
MSRBot 
Microsoft Research web crawler

Click on any string to get more details

MSRBot 
MSRBOT (http://research.microsoft.com/research/sv/msrbot/) 
MSRBOT 
MVAClient 
I have no information about this one. The ip address belongs to Chunghwa Telecom Co.,Ltd. in Taiwan. It is blacklisted by SORBS. If you know anything about this bot please let me know

Click on any string to get more details

MVAClient 
MVAClient 
NetResearchServer 
Spider for LOOP Improvements. Crawls the web by using the links found in the DMOZ Open Directory Project.

Click on any string to get more details

NetResearchServer 4.0 
NetResearchServer/4.0(loopimprovements.com/robot.html) 
NetResearchServer 3.5 
NetResearchServer/3.5(loopimprovements.com/robot.html) 
NetResearchServer 2.8 
NetResearchServer/2.8(loopimprovements.com/robot.html) 
NetResearchServer 2.7 
NetResearchServer/2.7(loopimprovements.com/robot.html) 
NetResearchServer 2.5 
NetResearchServer/2.5(loopimprovements.com/robot.html) 
NetResearchServer 
NetResearchServer(http://www.look.com) 
NG-Search 
NG-Search is experimental searchengine with new semantic trials to list the most relevance words and groups around your query

Click on any string to get more details

NG-Search 0.9.8 
NG-Search/0.9.8 (http://www.ng-search.com) 
NG-Search 0.86 
NG-Search/0.86 (+http://www.ng-search.com) 
NG-Search/0.86 ( http://www.ng-search.com) 
nicebot

Click on any string to get more details

nicebot 
nicebot 
noxtrumbot 
Spanish search engine for Spanish and Portuguese pages. Belongs to TPI, Telef髇ica Publicidad e Informaci髇, S.A

Click on any string to get more details

noxtrumbot 1.0 
noxtrumbot/1.0 (crawler@noxtrum.com) 
Nusearch Spider 
Crawls for the Nusearch search engine. Customizable search engine with some additional features like active bookmarks, and alternative result views.

Click on any string to get more details

Nusearch Spider 
Nusearch Spider (www.nusearch.com) 
nuSearch Spider (compatible; MSIE 4.01; Windows NT) 
NutchCVS 
Open source robot

Click on any string to get more details

NutchCVS 0.8-dev 
NutchCVS/0.8-dev (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org) 
NutchCVS 0.7.2 
NutchCVS/0.7.2 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org) 
NutchCVS 0.7.1 
NutchCVS/0.7.1 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org) 
NutchCVS/0.7.1 (Nutch running at UW; http://crawlers.cs.washington.edu/; sycrawl@cs.washington.edu) 
NutchCVS 0.7 
NutchCVS/0.7 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org) 
NutchCVS 0.06-dev 
NutchCVS/0.06-dev (Nutch; http://www.nutch.org/docs/en/bot.html; nutch-agent@lists.sourceforge.net) 
NutchCVS/0.06-dev (Nutch; http://www.nutch.org/docs/en/bot.html; jagdeepssandhu@hotmail.com) 
NutchCVS 0.05 
NutchCVS/0.05 (Nutch; http://www.nutch.org/docs/en/bot.html; nutch-agent@lists.sourceforge.net) 
obot 
German spider from Cobion, now part of Internet Security Systems. Scans the web for their clients looking for copyright infringement

Click on any string to get more details

obot 
Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 4.0; obot) 
oegp 
The IP address belongs to the Deutsche Telekom in Germany. They don’t give any information about that crawler. IP address is blacklisted

Click on any string to get more details

oegp 1.3.0 
oegp v. 1.3.0 
OmniExplorer_Bot 
New crawler for Omni-Explorer. Site not launched yet (February 06)

Click on any string to get more details

OmniExplorer_Bot 6.70 
OmniExplorer_Bot/6.70 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 6.65a 
OmniExplorer_Bot/6.65a (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 6.63b 
OmniExplorer_Bot/6.63b (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 6.62 
OmniExplorer_Bot/6.62 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 6.60 
OmniExplorer_Bot/6.60 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 6.47 
OmniExplorer_Bot/6.47 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 5.91c 
OmniExplorer_Bot/5.91c (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 5.28 
OmniExplorer_Bot/5.28 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 5.25 
OmniExplorer_Bot/5.25 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 5.20 
OmniExplorer_Bot/5.20 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 5.01 
OmniExplorer_Bot/5.01 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 4.80 
OmniExplorer_Bot/4.80 (+http://www.omni-explorer.com) WorldIndexer 
OmniExplorer_Bot 4.32 
OmniExplorer_Bot/4.32 (+http://www.omni-explorer.com) WorldIndexer 
OOZBOT

Click on any string to get more details

OOZBOT 0.20 
OOZBOT/0.20 ( — ; http://www.setooz.com/oozbot.html ; agentname at setooz dot_com ) 
OOZBOT 0.17 
OOZBOT/0.17 (–; http://www.setooz.com/oozbot.html; pvvpr at iiit dot ac dot in) 
Orbiter 
Spider for DailyOrbit search engine. Visits only the homepage of a domain.

Click on any string to get more details

Orbiter 
Orbiter (+http://www.dailyorbit.com/bot.htm) 
PageBitesHyperBot 
Crawler for PageBites, a search engine for job openings and/or r閟um閟. You can also post your r閟um?and/or job opening to them.

Click on any string to get more details

PageBitesHyperBot 600 
PageBitesHyperBot/600 (http://www.pagebites.com/) 
polybot 
Polybot is a distributed web crawler developed in the Department of Computer and Information Science at Polytechnic University as part of an academic research project that explores new techniques for searching and analyzing the World Wide Web. This bot is not connected to the search site www.polybot.com and it has nothing to do with the virus of the same name

Click on any string to get more details

polybot 1.0 
polybot 1.0 (http://cis.poly.edu/polybot/) 
Pompos 
Crawler for the french search engine dir

Click on any string to get more details

Pompos 1.3 
Pompos/1.3 http://dir.com/pompos.html 
Pompos 1.2 
Pompos/1.2 http://pompos.iliad.fr 
Pompos 1.1 
Pompos/1.1 http://pompos.iliad.fr 
Psbot 
Image crawler from Picsearch. Indexes images from the web

Click on any string to get more details

Psbot 0.1 
psbot/0.1 (+http://www.picsearch.com/bot.html) 
PycURL 
PycURL is a Python interfer to libcurl. PycURL can be used to fetch objects identified by a URL from a Python program, similar to the urllib Python module

Click on any string to get more details

PycURL 7.13.2 
PycURL/7.13.2 
PycURL 
PycURL 
RAMPyBot 
RAMPyBot is giveRamp’s (give Relevant Answers with Meticulous Precision) spider. Belongs to Gomvents

Click on any string to get more details

RAMPyBot 0.1 
RAMPyBot – www.giveRAMP.com/0.1 (RAMPyBot – www.giveRAMP.com; http://www.giveramp.com/bot.html; support@giveRAMP.com) 
RufusBot 
Web Crawler from Webaroo

Click on any string to get more details

RufusBot 
RufusBot (Rufus Web Miner; http://64.124.122.252/feedback.html) 
SandCrawler 
This one belongs to Microsoft. No idea what they are spidering with this one.

Click on any string to get more details

SandCrawler 
SandCrawler – Compatibility Testing 
SBIder 
SiteSell web crawler

Click on any string to get more details

SBIder 0.8-dev 
SBIder/0.8-dev (SBIder; http://www.sitesell.com/sbider.html; http://support.sitesell.com/contact-support.html) 
Scrubby 
Scrub the web’s crawler

Click on any string to get more details

Scrubby 2.2 
Scrubby/2.2 (http://www.scrubtheweb.com/) 
Mozilla/5.0 (compatible; Scrubby/2.2; +http://www.scrubtheweb.com/) 
Mozilla/5.0 (compatible; Scrubby/2.2; http://www.scrubtheweb.com/) 
Scrubby 2.1 
Mozilla/5.0 (compatible; Scrubby/2.1; +http://www.scrubtheweb.com/abs/meta-check.html) 
Scrubby/2.1 (http://www.scrubtheweb.com/) 
SearchSight 
Search engine and directory

Click on any string to get more details

SearchSight 2.0 
SearchSight/2.0 (http://SearchSight.com/) 
Seekbot 
Spider for the european seekport search engine.

Click on any string to get more details

Seekbot 1.0 
Seekbot/1.0 (http://www.seekbot.net/bot.html) RobotsTxtFetcher/1.2 
Seekbot/1.0 (http://www.seekbot.net/bot.html) HTTPFetcher/2.1 
Seekbot/1.0 (http://www.seekbot.net/bot.html) HTTPFetcher/0.3 
Seekbot/1.0 (http://www.seekbot.net/bot.html) 
semanticdiscovery 
The Semantic Discovery robot collects content from the web to be matched into focused "product and service" taxonomies and then published in multiple search engine directories.

Click on any string to get more details

semanticdiscovery 0.1 
semanticdiscovery/0.1 
Sensis Web Crawler

Click on any string to get more details

Sensis Web Crawler 
Sensis Web Crawler (search_comments\at\sensis\dot\com\dot\au) 
SEOChat::Bot

Click on any string to get more details

SEOChat::Bot v1.1 
Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0) SEOChat::Bot v1.1 
Shim-Crawler 
Japanese crawler, collects web pages for researches related to web-search and data mining. The Crawler is used by the members of Chikayama-Taura Laboratory to crawl web-pages only for the research purposes.

Click on any string to get more details

Shim-Crawler 
Shim-Crawler(Mozilla-compatible; http://www.logos.ic.i.u-tokyo.ac.jp/crawler/; crawl@logos.ic.i.u-tokyo.ac.jp) 
Shim-Crawler 
ShopWiki 
ShopWiki is a shopping search engine crossed with a wiki. The service crawls the web for product listings, then allows users to write reviews in a collaborative wiki format.

Click on any string to get more details

ShopWiki 1.0 
ShopWiki/1.0 ( +http://www.shopwiki.com/wiki/Help:Bot) 
Shoula robot 
Shoula Search Engine

Click on any string to get more details

Shoula robot 
Mozilla/4.0 (compatible: Shoula robot) 
silk 
Web crawler for the Slider DMOZ search engine. Crawls DMOZ entries only. You can add your own site by including a Slider.com search box or button on the main page of your website or by paying.

Click on any string to get more details

silk 1.0 
silk/1.0 (+http://www.slider.com/silk.htm)/3.7 
Silk/1.0 
Snappy 
UrlTrends’ robot for generating Reports

Click on any string to get more details

Snappy 1.1 
Snappy/1.1 ( http://www.urltrends.com/ ) 
sogou spider 
Chinese spider. Sohu’s proprietary search engine, Sogou, which means 慡earch Dog?in Chinese, initially launched in August 2004

Click on any string to get more details

sogou spider 
sogou spider 
Speedy Spider 
Speedy is an automated web crawler used to build the search engine index at Entireweb

Click on any string to get more details

Speedy Spider 1.3 
Speedy Spider (Entireweb; Beta/1.3; http://www.entireweb.com/about/search_tech/speedyspider/) 
Speedy Spider 1.0 
Speedy Spider (Beta/1.0; www.entireweb.com) 
Sqworm

Click on any string to get more details

Sqworm 2.9.85-BETA 
Sqworm/2.9.85-BETA (beta_release; 20011115-775; i686-pc-linux-gnu) 
StackRambler 
Russian spider. Crawls the web for Ramber.ru, a search engine of Rambler Media

Click on any string to get more details

StackRambler 2.0 
StackRambler/2.0 (MSIE incompatible) 
StackRambler/2.0 
SurveyBot 
Monitors internet statistics for the Whois Source domain search engine

Click on any string to get more details

SurveyBot 2.3 
SurveyBot/2.3+(Whois+Source) 
SurveyBot/2.3 (Whois Source) 
SynooBot 
Spider for the German web directory Synoo. Accepts free submissions of German websites

Click on any string to get more details

SynooBot 0.7.1 
SynooBot/0.7.1 (SynooBot; http://www.synoo.de/bot.html; webmaster@synoo.com) 
Teoma 
The Teoma Crawler is Ask Jeeves’ Web-indexing robot

Click on any string to get more details

Teoma 
Mozilla/2.0 (compatible; Ask Jeeves/Teoma; +http://sp.ask.com/docs/about/tech_crawling.html) 
Mozilla/2.0 (compatible; Ask Jeeves/Teoma; +http://about.ask.com/en/docs/about/webmasters.shtml) 
Mozilla/2.0 (compatible; Ask Jeeves/Teoma) 
TerrawizBot 
Indian search engine bot. TerrawizBot is the user-agent for Terrawiz’s web crawler. Terrawiz is a privately held startup with development center in Bangalore, India.

Click on any string to get more details

TerrawizBot 1.0 
TerrawizBot/1.0 (+http://www.terrawiz.com/bot.html) 
TheSuBot 
Hyro-Mediaservice German crawler

Click on any string to get more details

TheSuBot 0.2 
TheSuBot/0.2 (www.thesubot.de) 
TheSuBot 0.1 
TheSuBot/0.1 (www.thesubot.de) 
Thumbnail.CZ robot 
Takes screenshots of websites. Thumbnail.CZ visits the page and checkes if it exists. Later a Konqueror browser visits the site and takes a screenshot of the Homepage. Doesn’t follow any links and doesn’t obey robots.txt. Provides search engines and catalogues with thumbnail previews of websites to make results more attractive.

Click on any string to get more details

Thumbnail.CZ robot 1.1 
Thumbnail.CZ robot 1.1 (http://thumbnail.cz/why-no-robots-txt.html) 
TinEye 
The TinEye crawler is a web crawler for an open image search project currently being built

Click on any string to get more details

TinEye 1.1 
TinEye/1.1 (http://tineye.com/crawler.html) 
TinEye 
TinEye 
TurnitinBot 
Turnitin.com’s web crawling robot. This robot collects content from the Internet for the sole purpose of helping educational institutions prevent plagiarism. In particular, they compare student papers against the content they find on the Internet to see if they can find similarities.

Click on any string to get more details

TurnitinBot 2.1 
TurnitinBot/2.1 (http://www.turnitin.com/robot/crawlerinfo.html) 
TurnitinBot 2.0 
TurnitinBot/2.0 http://www.turnitin.com/robot/crawlerinfo.html 
TurnitinBot 1.5 
TurnitinBot/1.5 http://www.turnitin.com/robot/crawlerinfo.html 
TurnitinBot/1.5 (http://www.turnitin.com/robot/crawlerinfo.html) 
TurnitinBot/1.5 http://www.turnitin.com/robot/crawlerinfo.html 
TurnitinBot/1.5 (http://www.turnitin.com/robot/crawlerinfo.html) 
updated 
Spider for the product search engine Updated.

Click on any string to get more details

updated 0.1-beta 
updated/0.1-beta (updated; http://www.updated.com; updated@updated.com) 
Vagabondo 
The WiseGuys webagent visits primarily dutch (.nl) websites, WAP sites however are visited worldwide. An alternate identification is: Bilbo . This is an old webagent, that is mainly still in use for WAP. These robots mainly gather data for parties including Track.nl and Kobala.nl.

Click on any string to get more details

Vagabondo 4.0Beta 
Mozilla/4.0 (compatible; Vagabondo/4.0Beta; webcrawler at wise-guys dot nl; http://webagent.wise-guys.nl/; http://www.wise-guys.nl/) 
Vagabondo 2.2 
Mozilla/4.0 (compatible; Vagabondo/2.2; webcrawler at wise-guys dot nl; http://webagent.wise-guys.nl/) 
Vagabondo 2.1 
Mozilla/5.0 (compatible; Vagabondo/2.1; webcrawler at wise-guys dot nl; http://webagent.wise-guys.nl/) 
Vagabondo 2.0 MT 
Mozilla/3.0 (Vagabondo/2.0 MT; webcrawler@NOSPAMexperimental.net; http://aanmelden.ilse.nl/?aanmeld_mode=webhints) 
VoilaBot 
French telecom’s Voila search engine crawler

Click on any string to get more details

VoilaBot 1.2 
Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) VoilaBot BETA 1.2 (http://www.voila.com/) 
Vortex 
Vortex Web Indexing Robot, part of a study on internet link distribution

Click on any string to get more details

Vortex 2.2 
Vortex/2.2 (+http://marty.anstey.ca/robots/vortex/) 
Vortex/2.2 ( http://marty.anstey.ca/robots/vortex/) 
Vortex 1.2 
VORTEX/1.2 ( http://marty.anstey.ca/robots/vortex/) 
voyager 
voyager is Cosmix Corporation’s web crawling robot.It fetches documents from the web to build the index for the Kosmix search engine

Click on any string to get more details

voyager 2.0 
voyager/2.0 (http://www.kosmix.com/crawler.html) 
voyager 1.0 
voyager/1.0 
VYU2

Click on any string to get more details

VYU2 
VYU2 (GNU; OpenRISC) 
webcollage 
WebCollage is a program that creates collages out of random images found on the Web. More images are being added to the collage about once a minute, so this page will reload itself periodically. Clicking on one of the images in the collage will take you to the page on which it was found.

Click on any string to get more details

webcollage 1.93 
webcollage/1.93 
webcollage 1.129 
webcollage/1.129 
webcollage 1.125 
webcollage/1.125 
webcollage 1.117 
webcollage/1.117 
webcollage 1.114 
webcollage/1.114 
Websquash.com 
Websquash web crawler

Click on any string to get more details

Websquash.com 
Websquash.com (Add url robot) 
wf84 
WebFountain?is a set of research technologies that collect, store and analyze massive amounts of unstructured and semi-structured text. It is built on an open, extensible platform that enables the discovery of trends, patterns and relationships from data. For more information on text analytics research at IBM, please visit UIMA.

Click on any string to get more details

wf84 
http://www.almaden.ibm.com/cs/crawler [wf84] 
WoFindeIch Robot 
Crawler for the Switzerland based wofindeich search engine. For .ch and .li Domains only, unless they have Switzerland related content.

Click on any string to get more details

WoFindeIch Robot 1.0 
WoFindeIch Robot 1.0(+http://www.search.wofindeich.com/robot.php) 
WoFindeIch Robot 1.0( http://www.search.wofindeich.com/robot.php) 
Xaldon_WebSpider 
Xaldon Technologies’s Webspider crawls the web and copies websites to your harddisk for offline browsing

Click on any string to get more details

Xaldon_WebSpider 2.0.b1 
Xaldon_WebSpider/2.0.b1 
Xaldon_WebSpider/2.0.b1 
yacy 
yacy is a client to the YaCy P2P-based Web indexing network. It can crawl the web, search the web and provide web-services like a web server, file share, a wiki and peer-to-peer messages.

Click on any string to get more details

yacy 
yacybot (x86 Windows XP 5.1; java 1.6.0_12; Europe/de) http://yacy.net/bot.html 
yacybot (x86 Windows XP 5.1; java 1.6.0_11; Europe/de) http://yacy.net/bot.html 
yacybot (x86 Windows XP 5.1; java 1.6.0; Europe/de) http://yacy.net/yacy/bot.html 
yacybot (ppc Mac OS X 10.5.2; java 1.5.0_13; Europe/de) http://yacy.net/bot.html 
yacybot (ppc Mac OS X 10.4.10; java 1.5.0_07; Europe/de) http://yacy.net/bot.html 
yacybot (i386 Mac OS X 10.5.7; java 1.5.0_16; Europe/de) http://yacy.net/bot.html 
yacybot (i386 Linux 2.6.9-023stab046.2-smp; java 1.6.0_05; Europe/en) http://yacy.net/bot.html 
yacybot (i386 Linux 2.6.8-022stab070.5-enterprise; java 1.4.2-03; Europe/en) yacy.net 
yacybot (i386 Linux 2.6.24-24-generic; java 1.6.0_07; Europe/en) http://yacy.net/bot.html 
yacybot (i386 Linux 2.6.23; java 1.6.0_04; Europe/en) http://yacy.net/bot.html 
yacybot (i386 Linux 2.6.22-14-generic; java 1.6.0_03; Europe/de) http://yacy.net/bot.html 
yacybot (amd64 Linux 2.6.28-18-generic; java 1.6.0_0; Europe/en) http://yacy.net/bot.html 
yacybot (amd64 Linux 2.6.16-2-amd64-k8-smp; java 1.5.0_10; Europe/en) http://yacy.net/yacy/bot.html 
yacy (i386 Linux 2.6.14-1.1653_FC4smp; java 1.5.0_04; Europe/de) yacy.net 
yacy (i386 Linux 2.4.20-021stab028.17.777-enterprise; java 1.4.2_08; Europe/en) yacy.net 
Yahoo! Slurp 
Yahoo! Slurp – Yahoo!’s Web Crawler

Click on any string to get more details

Yahoo! Slurp 
Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp) 
Yahoo! Slurp China 
Yahoo’s crawler for China

Click on any string to get more details

Yahoo! Slurp China 
Mozilla/5.0 (compatible; Yahoo! Slurp China; http://misc.yahoo.com.cn/help.html) 
YahooSeeker

Click on any string to get more details

YahooSeeker 1.2 
YahooSeeker/1.2 (compatible; Mozilla 4.0; MSIE 5.5; yahooseeker at yahoo-inc dot com ; http://help.yahoo.com/help/us/shop/merchant/) 
YahooSeeker-Testing

Click on any string to get more details

YahooSeeker-Testing v3.9 
YahooSeeker-Testing/v3.9 (compatible; Mozilla 4.0; MSIE 5.5; http://search.yahoo.com/) 
yoogliFetchAgent 
Yoogli search engine (under construction). Should come live february 2006

Click on any string to get more details

yoogliFetchAgent 0.1 
yoogliFetchAgent/0.1 
Zao 
Japanese crawler of Kototoi.org

Click on any string to get more details

Zao 0.1 
Zao/0.1 (http://www.kototoi.org/zao/) 
Zao/0.1 (http://www.kototoi.org/zao/) 
Zealbot 
Crawls all Web sites listed with LookSmart each week to ensure that they are still active, responsive sites.

Click on any string to get more details

Zealbot 1.0 
Mozilla/4.0 (compatible; Zealbot 1.0) 
zspider 
Crawler for Redkolibri, a new search engine under development, to be released in 2006.

Click on any string to get more details

zspider 0.9-dev 
zspider/0.9-dev http://feedback.redkolibri.com/ 
ZyBorg 
LookSmart’s WiseNut search engine crawler

Click on any string to get more details

ZyBorg 1.0 
Mozilla/4.0 compatible ZyBorg/1.0 DLC (wn.zyborg@looksmart.net; http://www.WISEnutbot.com) 
Mozilla/4.0 compatible ZyBorg/1.0 Dead Link Checker (wn.zyborg@looksmart.net; http://www.WISEnutbot.com) 
Mozilla/4.0 compatible ZyBorg/1.0 Dead Link Checker (wn.dlc@looksmart.net; http://www.WISEnutbot.com) 
Mozilla/4.0 compatible ZyBorg/1.0 (wn.zyborg@looksmart.net; http://www.WISEnutbot.com) 
Mozilla/4.0 compatible ZyBorg/1.0 (wn-16.zyborg@looksmart.net; http://www.WISEnutbot.com) 
Mozilla/4.0 compatible ZyBorg/1.0 (wn-14.zyborg@looksmart.net; http://www.WISEnutbot.com) 
E-MAIL CLIENTS 
Thunderbird 
E-mail and news client developed by the Mozilla Foundation

Click on any string to get more details

Thunderbird 3.0a1 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9pre) Gecko/2008050715 Thunderbird/3.0a1 
Thunderbird 3.0.1 
Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.9.1.7) Gecko/20100111 Thunderbird/3.0.1 ThunderBrowse/3.2.8.1 
Thunderbird 2.0.0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070728 Thunderbird/2.0.0.6 
Thunderbird 2.0.0.4 
Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.8.1.4) Gecko/20070622 Thunderbird/2.0.0.4 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4) Gecko/20070604 Thunderbird/2.0.0.4 
Thunderbird 2.0.0.24 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.24) Gecko/20100317 Thunderbird/2.0.0.24 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.24) Gecko/20100228 Thunderbird/2.0.0.24 
Thunderbird 2.0.0.23 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.23) Gecko/20090817 Thunderbird/2.0.0.23 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.23) Gecko/20090812 Thunderbird/2.0.0.23 
Thunderbird 2.0.0.22 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.22) Gecko/20090608 Thunderbird/2.0.0.22 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.22) Gecko/20090605 Thunderbird/2.0.0.22 
Thunderbird 2.0.0.21 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.21) Gecko/20090409 Thunderbird/2.0.0.21 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.21) Gecko/20090318 Thunderbird/2.0.0.21 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.21) Gecko/20090302 Thunderbird/2.0.0.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.21) Gecko/20090302 Thunderbird/2.0.0.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.21) Gecko/20090302 Thunderbird/2.0.0.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.21) Gecko/20090302 Thunderbird/2.0.0.21 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.21) Gecko/20090302 Thunderbird/2.0.0.21 
Thunderbird 2.0.0.20 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.20) Gecko/20081217 Thunderbird/2.0.0.20 
Thunderbird 2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/20090105 Thunderbird/2.0.0.19 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.19) Gecko/2008120920 Thunderbird/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.19) Gecko/20081209 Thunderbird/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.19) Gecko/20081209 Thunderbird/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.19) Gecko/20081209 Thunderbird/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081209 Thunderbird/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.19) Gecko/20081209 Thunderbird/2.0.0.19 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.19) Gecko/20081209 Thunderbird/2.0.0.19 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.19) Gecko/20081209 Thunderbird/2.0.0.19 
Thunderbird 2.0.0.18 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.18) Gecko/20081125 Thunderbird/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.18) Gecko/20081105 Thunderbird/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.18) Gecko/20081105 Thunderbird/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.18) Gecko/20081105 Thunderbird/2.0.0.18 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.18) Gecko/20081105 Thunderbird/2.0.0.18 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.18) Gecko/20081105 Thunderbird/2.0.0.18 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-GB; rv:1.8.1.18) Gecko/20081105 Thunderbird/2.0.0.18 
Thunderbird 2.0.0.17 
Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.8.1.17) Gecko/20081018 Thunderbird/2.0.0.17 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/20080925 Thunderbird/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-GB; rv:1.8.1.17) Gecko/20080914 Thunderbird/2.0.0.17 
Thunderbird 2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080724 Thunderbird/2.0.0.16 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/20080723 Fedora/2.0.0.16-1.fc8 Thunderbird/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1.16) Gecko/20080708 Thunderbird/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.16) Gecko/20080708 Thunderbird/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.16) Gecko/20080708 Thunderbird/2.0.0.16 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.16) Gecko/20080708 Thunderbird/2.0.0.16 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; fr; rv:1.8.1.16) Gecko/20080707 Thunderbird/2.0.0.16 
Thunderbird 2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080505 Thunderbird/2.0.0.14 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.14) Gecko/20080502 Thunderbird/2.0.0.14 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.14) Gecko/20080421 Thunderbird/2.0.0.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.14) Gecko/20080421 Thunderbird/2.0.0.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.14) Gecko/20080421 Thunderbird/2.0.0.14 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.14) Gecko/20080421 Thunderbird/2.0.0.14 
Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-GB; rv:1.8.1.14) Gecko/20080421 Thunderbird/2.0.0.14 
Thunderbird 2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.1.12) Gecko/20080213 Thunderbird/2.0.0.12 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.12) Gecko/20080227 Thunderbird/2.0.0.12 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.12) Gecko/20080213 Thunderbird/2.0.0.12 
Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.12) Gecko/20080213 Thunderbird/2.0.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.12) Gecko/20080213 Thunderbird/2.0.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.12) Gecko/20080213 Thunderbird/2.0.0.12 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.1.12) Gecko/20080213 Thunderbird/2.0.0.12 
Thunderbird 2.0.0.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070326 Thunderbird/2.0.0.0 
Thunderbird 1.5.0.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.0.14) Gecko/20071210 Thunderbird/1.5.0.14 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.0.14) Gecko/20071210 Thunderbird/1.5.0.14 
Thunderbird 1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070403 Thunderbird/1.5.0.10 
Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.10) Gecko/20070306 Thunderbird/1.5.0.10 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8.0.10) Gecko/20070221 Thunderbird/1.5.0.10 
Thunderbird 1.0.7 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.12) Gecko/20050923 Thunderbird/1.0.7 
Thunderbird 1.0.6 
Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.10) Gecko/20050716 Thunderbird/1.0.6 
Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; fr-FR; rv:1.7.10) Gecko/20050716 Thunderbird/1.0.6 
Thunderbird 1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.6) Gecko/20050317 Thunderbird/1.0.2 
Mozilla/5.0 (Windows; U; Windows NT 5.1; de-DE; rv:1.7.6) Gecko/20050317 Thunderbird/1.0.2 
Thunderbird 1.0 
Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR; rv:1.7.5) Gecko/20041206 Thunderbird/1.0 
E-MAIL COLLECTORS 
EmailSiphon 
Also known as Sonic

Click on any string to get more details

EmailSiphon 
EmailSiphon 
FEED READERS 
Bloglines 
Web based Feed reader for Ask Jeeves’ Bloglines, a service for searching, subscribing, creating and sharing news feeds, blogs and rich web content.

Click on any string to get more details

Bloglines 3.1 
Bloglines/3.1 (http://www.bloglines.com) 
Bloglines 3.0-rho 
Bloglines/3.0-rho (http://www.bloglines.com; 3 subscribers) 
everyfeed-spider 
everyfeed’s robot browses the Internet in the search of new feeds to be added and automatically record the news contained in these flows.

Click on any string to get more details

everyfeed-spider 2.0 
everyfeed-spider/2.0 (http://www.everyfeed.com) 
FeedFetcher-Google 
Google’s feedfetcher grabs RSS or Atom feeds when users choose to add them to their Google homepage or Google Reader. Feedfetcher collects and periodically refreshes these user-initiated feeds, but does not index them in Blog Search or Google’s other search services (feeds only appear in their search results if they’ve been crawled by Googlebot).

Click on any string to get more details

FeedFetcher-Google 
FeedFetcher-Google; (+http://www.google.com/feedfetcher.html) 
Gregarius

Click on any string to get more details

Gregarius 0.5.2 
Gregarius/0.5.2 (+http://devlog.gregarius.net/docs/ua) 
LIBRARIES 
Java

Click on any string to get more details

Java 1.6.0_13 
Java/1.6.0_13 
Java 1.6.0_12 
Java/1.6.0_12 
Java 1.6.0_11 
Java/1.6.0_11 
Java 1.6.0_04 
Java/1.6.0_04 
Java 1.6.0_03 
Java/1.6.0_03 
Java 1.6.0_02 
Java/1.6.0_02 
Java 1.6.0-beta 
Java/1.6.0-beta 
Java 1.5.0_11 
Java/1.5.0_11 
Java 1.5.0_08 
Java/1.5.0_08 
Java 1.5.0_06 
Java/1.5.0_06 
Java 1.5.0_05 
Java/1.5.0_05 
Java 1.5.0_04 
Java/1.5.0_04 
Java 1.5.0_03 
Java/1.5.0_03 
Java 1.5.0_02 
Java/1.5.0_02 
Java 1.5.0_01 
Java/1.5.0_01 
Java 1.5.0 
Java/1.5.0 
Java 1.4.2_11 
Java/1.4.2_11 
Java 1.4.2_10 
Java/1.4.2_10 
Java 1.4.2_09 
Java/1.4.2_09 
Java 1.4.2_08 
Java/1.4.2_08 
Java 1.4.2_07 
Java/1.4.2_07 
Java 1.4.2_05 
Java/1.4.2_05 
Java 1.4.2_04 
Java/1.4.2_04 
Java 1.4.2_03 
Java1.4.2_03 
Java/1.4.2_03 
Java 1.4.2_01 
Java/1.4.2_01 
Java 1.4.2 
Java/1.4.2 
Java 1.4.1_04 
Java/1.4.1_04 
Java 1.4.1_03 
Java/1.4.1_03 
Java 1.4.1_02 
Java/1.4.1_02 
Java 1.4.1_01a 
Java/1.4.1_01a 
Java 1.4.1_01 
Java/1.4.1_01 
Java 1.4.1-p3 
Java/1.4.1-p3 
Java 1.4.1 
Java/1.4.1 
Java 1.4.0_03 
Java1.4.0_03 
Java 1.4.0_02 
Java1.4.0_02 
Java 1.4.0_01 
Java1.4.0_01 
Java 1.4.0 
Java1.4.0 
Java 1.3.1_06 
Java1.3.1_06 
Java 1.3.1_04 
Java1.3.1_04 
Java 1.3.1 
Java1.3.1 
Java 1.3.0 
Java1.3.0 
Java 1.2.2-JDeveloper 
Java1.2.2-JDeveloper 
Java 1.2.2 
Java1.2.2 
Java 1.2.1 
Java1.2.1 
libwww-perl

Click on any string to get more details

libwww-perl 5.820 
libwww-perl/5.820 
libwww-perl 5.816 
libwww-perl/5.816 
libwww-perl 5.814 
libwww-perl/5.814 
libwww-perl 5.808 
libwww-perl/5.808 
libwww-perl 5.805 
libwww-perl/5.805 
libwww-perl 5.803 
libwww-perl/5.803 
libwww-perl 5.800 
libwww-perl/5.800 (+http://passoire.afraid.org/mylittlewebsurvey/index.html) 
libwww-perl/5.800 
libwww-perl 5.76 
libwww-perl/5.76 
libwww-perl 5.75 
libwww-perl/5.75 
libwww-perl 5.69 
libwww-perl/5.69 
libwww-perl 5.65 
libwww-perl/5.65 
libwww-perl/5.65 
libwww-perl 5.64 
libwww-perl/5.64 
libwww-perl 5.63 
libwww-perl/5.63 
libwww-perl 5.53 
libwww-perl/5.53 
libwww-perl 5.50 
libwww-perl/5.50 
libwww-perl 5.48 
libwww-perl/5.48 
libwww-perl 5.36 
libwww-perl/5.36 
Peach

Click on any string to get more details

Peach 1.01 
Peach/1.01 (Ubuntu 8.04 LTS; U; en) 
Python-urllib 
Python Module for fetching data across the World Wide Web

Click on any string to get more details

Python-urllib 2.5 
Python-urllib/2.5 
Python-urllib 2.4 
Python-urllib/2.4 
Python-urllib 2.1 
Python-urllib/2.1 
Python-urllib 2.0a1 
Python-urllib/2.0a1 
Python-urllib 1.17 
Python-urllib/1.17 
Python-urllib 1.16 
Python-urllib/1.16 
Python-urllib 1.15 
Python-urllib/1.15 
LINK CHECKERS 
AbiLogicBot 
Checkes links for the AbiLogic web directory

Click on any string to get more details

AbiLogicBot 1.0 
Mozilla/5.0 (compatible; AbiLogicBot/1.0; +http://www.abilogic.com/bot.html) 
Mozilla/5.0 (compatible; AbiLogicBot/1.0; +http://www.abilogic.com) 
Link Valet 
WDG Web Design Group Online Link Checker

Click on any string to get more details

Link Valet 1.1 
Link Valet Online 1.1 
Link Validity Check 
Link Checker for the w3dir directory, a web design and development directory

Click on any string to get more details

Link Validity Check 
Link Validity Check From: http://www.w3dir.com/cgi-bin (Using: Hot Links SQL by Mrcgiguy.com) 
LinksManager.com_bot 
Dead Link Checker from LinksManager.com

Click on any string to get more details

LinksManager.com_bot 5.0 
Mozilla/5.0 (compatible; LinksManager.com_bot http://linksmanager.com/linkchecker.html) 
LinksManager.com_bot 
Mozilla/5.0 (compatible; LinksManager.com_bot +http://linksmanager.com/linkchecker.html) 
Mojoo Robot 
Link checker for the Mojoo human edited website directory.

Click on any string to get more details

Mojoo Robot 
Mojoo Robot (http://www.mojoo.com/) 
Notifixious

Click on any string to get more details

Notifixious 
Notifixious/LinkChecker (http://notifixio.us) 
online link validator

Click on any string to get more details

online link validator 
online link validator (http://www.dead-links.com/) 
Ploetz + Zeller

Click on any string to get more details

Ploetz + Zeller v1.0 
Ploetz + Zeller (http://www.ploetz-zeller.de) Link Validator v1.0 (support@p-und-z.de) for ARIS Business Architect 
Reciprocal Link System PRO 
Search enginge optimization tool. Checkes reciprocal links and creates a link directory

Click on any string to get more details

Reciprocal Link System PRO 
InfoWizards Reciprocal Link System PRO – (http://www.infowizards.com) 
REL Link Checker Lite 
Free link checker tool from REL Software. The program locates broken links and links containing syntactic errors.

Click on any string to get more details

REL Link Checker Lite 1.0 
REL Link Checker Lite 1.0 
SiteBar 
SiteBar Bookmark Server: open source software that stores and synchronizes bookmarks collected with the SiteBar Sidebar Toolbar or a Firefox plug-in.

Click on any string to get more details

SiteBar 3.3.8 
SiteBar/3.3.8 (Bookmark Server; http://sitebar.org/) 
SiteBar 3.3.5 
SiteBar/3.3.5 (Bookmark Server; http://sitebar.org/) 
Vivante Link Checker 
Link checker for vivante, a search engine specialized in local search. Belongs to Adjunction

Click on any string to get more details

Vivante Link Checker 
Vivante Link Checker (http://www.vivante.com) 
W3C-checklink 
W3C Link Checker, checks anchors (hyperlinks) in a HTML/XHTML document

Click on any string to get more details

W3C-checklink 4.5 
W3C-checklink/4.5 [4.160] libwww-perl/5.823 
W3C-checklink/4.5 [4.154] libwww-perl/5.823 
W3C-checklink 4.3 
W3C-checklink/4.3 [4.42] libwww-perl/5.820 
W3C-checklink/4.3 [4.42] libwww-perl/5.808 
W3C-checklink/4.3 [4.42] libwww-perl/5.805 
W3C-checklink 4.2.1 
W3C-checklink/4.2.1 [4.21] libwww-perl/5.803 
W3C-checklink 4.2 
W3C-checklink/4.2 [4.20] libwww-perl/5.803 
W3C-checklink 3.6.2.3 
W3C-checklink/3.6.2.3 libwww-perl/5.64 
W3C-checklink 2.90 
W3C-checklink/2.90 libwww-perl/5.64 
Xenu Link Sleuth 
Checks web sites for broken links. Written by Tilman Hausherr

Click on any string to get more details

Xenu Link Sleuth 1.2i 
Xenu Link Sleuth 1.2i 
Xenu Link Sleuth 1.2h 
Xenu Link Sleuth 1.2h 
Xenu Link Sleuth 1.2g 
Xenu Link Sleuth 1.2g 
Xenu Link Sleuth 1.2f 
Xenu Link Sleuth 1.2f 
Xenu Link Sleuth 1.2e 
Xenu Link Sleuth 1.2e 
Xenu Link Sleuth 1.2d 
Xenu Link Sleuth 1.2d 
Xenu Link Sleuth 1.2c 
Xenu Link Sleuth 1.2c 
Xenu Link Sleuth 1.2b 
Xenu Link Sleuth 1.2b 
OFFLINE BROWSERS 
Offline Explorer 
Offline browser from MetaProducts, formerly called Web Downloader

Click on any string to get more details

Offline Explorer 2.5 
Offline Explorer/2.5 
Offline Explorer 1.9 
Offline Explorer/1.9 
Offline Explorer 1.4 
Offline Explorer/1.4 
SuperBot 
Offline Browser from Sparkleware

Click on any string to get more details

SuperBot 4.4.0.60 
SuperBot/4.4.0.60 (Windows XP) 
Web Downloader 
Offline browser from MetaProducts, now called Offline Explorer

Click on any string to get more details

Web Downloader 6.9 
Web Downloader/6.9 
Web Downloader 6.8 
Web Downloader/6.8 
Web Downloader 5.7 
Web Downloader/5.7 
Web Downloader 4.5 
Web Downloader/4.5 
WebCopier 
Offline Browser from Maximumsoft, copies websites to your harddisk for offline browsing

Click on any string to get more details

WebCopier 4.6 
WebCopier v4.6 
WebCopier 4.5.2 
WebCopier v4.5.2 
WebCopier 3.3 
WebCopier v3.3 
WebCopier 3.2a 
WebCopier v3.2a 
WebCopier v3.2a 
WebCopier 3.2 
WebCopier v3.2 
WebCopier 3.0 
WebCopier v3.0 
WebCopier 2.8 
WebCopier v2.8 
WebZIP 
Offline browser from spidersoft based on Internet Explorer. Lets you download web pages or entire web sites to your hard disk for offline browsing.

Click on any string to get more details

WebZIP 3.5 
WebZIP/3.5 (http://www.spidersoft.com) 
Wget 
GNU Wget is a free comandline tool for for retrieving files using HTTP, HTTPS and FTP

Click on any string to get more details

Wget 1.9cvs-stable 
Wget/1.9+cvs-stable (Red Hat modified) 
Wget 1.9.1 
Wget/1.9.1 
Wget 1.9 
Wget/1.9 
Wget 1.8.2 
Wget/1.8.2 
Wget 1.8.1 
Wget/1.8.1 
Wget 1.7 
Wget/1.7 
Wget 1.6 
Wget/1.6 
Wget 1.5.3 
Wget/1.5.3 
Wget 1.11.4 
Wget/1.11.4 (Red Hat modified) 
Wget 1.11.1 
Wget/1.11.1 (Red Hat modified) 
Wget 1.10.2 
Wget/1.10.2 (Red Hat modified) 
Wget/1.10.2 
Wget 1.10.1-beta1 
Wget/1.10.1-beta1 
Wget 1.10.1 
Wget/1.10.1 (Red Hat modified) 
Wget/1.10.1 
Wget 
wget 
OTHERS 
!Susie 
Sync2It’s bookmark collector. Sync2it is a service that synchronizes Bookmarks. Susie visits each of the websites bookmarked by a user to determine if this website would match the specified interests based upon the search criteria of that user.

Click on any string to get more details

!Susie 
!Susie (http://www.sync2it.com/susie) 
Amaya 
W3C’s Amaya is a Web editor, i.e. a tool used to create and update documents directly on the Web. Browsing features are seamlessly integrated with the editing and remote access features in a uniform environment. This follows the original vision of the Web as a space for collaboration and not just a one-way publishing medium.

Click on any string to get more details

Amaya 9.55 
amaya/9.55 libwww/5.4.0 
Amaya 9.54 
amaya/9.54 libwww/5.4.0 
Amaya 9.52 
amaya/9.52 libwww/5.4.0 
Amaya 9.51 
amaya/9.51 libwww/5.4.0 
Amaya 8.8.5 
amaya/8.8.5 libwww/5.4.0 
Amaya 5.4.0 
amaya/11.2 amaya/5.4.0 
amaya/11.1 amaya/5.4.0 
Amaya 11.3.1 
amaya/11.3.1 libwww/5.4.1 
Amaya 11.2 
amaya/11.2 libwww/5.4.0 
Amaya 11.1 
amaya/11.1 libwww/5.4.0 
Amaya 10.1 
amaya/10.1 libwww/5.4.0 
Amaya 10 
amaya/10 libwww/5.4.0 
Cocoal.icio.us 
Sci-Fi Hi-Fi’s Cocoal.icio.us is a Cocoa (Mac OS X) client for the web-based del.icio.us social bookmarking service.

Click on any string to get more details

Cocoal.icio.us 1.0v43 
Cocoal.icio.us/1.0 (v43) (Mac OS X; http://www.scifihifi.com/cocoalicious) 
Cocoal.icio.us 1.0v40 
Cocoal.icio.us/1.0 (v40) (Mac OS X; http://www.scifihifi.com/cocoalicious) 
Cocoal.icio.us 1.0v38 
Cocoal.icio.us/1.0 (v38) (Mac OS X; http://www.scifihifi.com/cocoalicious) 
DomainsDB.net MetaCrawler 
Reverse IP and NS lookup tool

Click on any string to get more details

DomainsDB.net MetaCrawler v.0.9.7c 
DomainsDB.net MetaCrawler v.0.9.7c (http://domainsdb.net/) 
GSiteCrawler 
Windows Generator for Google SiteMap-Files written by Johannes Mueller. Free download.

Click on any string to get more details

GSiteCrawler v1.12 
GSiteCrawler/v1.12 rev. 260 (http://gsitecrawler.com/) 
GSiteCrawler v1.06 
GSiteCrawler/v1.06 rev. 251 (http://gsitecrawler.com/) 
Snoopy 
Snoopy is a PHP class that simulates a web browser. It automates the task of retrieving web page content and posting forms, for example.

Click on any string to get more details

Snoopy v1.2 
Snoopy v1.2 
URD-MAGPIE 
URD (Usenet Resource Downloader) is a program to download binaries from usenet (newsgroups) through a web interfer

Click on any string to get more details

URD-MAGPIE 0.73 
URD-MAGPIE/0.73 (Cached) 
Windows-Media-Player 
Media Player for Windows

Click on any string to get more details

Windows-Media-Player 9.00.00.4503 
Windows-Media-Player/9.00.00.4503 
Windows-Media-Player 9.00.00.3250 
Windows-Media-Player/9.00.00.3250 
Windows-Media-Player 11.0.5721.5145 
Windows-Media-Player/11.0.5721.5145 
Windows-Media-Player 10.00.00.xxxx 
Windows-Media-Player/10.00.00.xxxx 
Windows-Media-Player 10.00.00.4036 
Windows-Media-Player/10.00.00.4036 
Windows-Media-Player 10.00.00.3646 
Windows-Media-Player/10.00.00.3646 
VALIDATORS 
CSE HTML Validator 
Free online HTML Editor and Syntax Checker. Download version available. Validate this page!

Click on any string to get more details

CSE HTML Validator 
CSE HTML Validator Lite Online (http://online.htmlvalidator.com/php/onlinevallite.php) 
CSSCheck 
WDG Web Design Group CSS Checker, Online CSS validator

Click on any string to get more details

CSSCheck 1.2.2 
CSSCheck/1.2.2 
Cynthia 
Validator for HiSoftware’s Cynthia Says portal, a web content accessibility validation solution. It is designed to identify errors in your content related to Section 508 standards and/or the WCAG guidelines.

Click on any string to get more details

Cynthia 1.0 
Cynthia 1.0 
HTMLParser 
HTML Parser is a Java library used to parse HTML in either a linear or nested fashion. Primarily used for transformation or extraction, it features filters, visitors, custom tags and easy to use JavaBeans. It is a fast, robust and well tested package.

Click on any string to get more details

HTMLParser 1.6 
HTMLParser/1.6 
P3P Validator 
P3P: The Platform for Privacy Preferences Project (P3P), developed by the World Wide Web Consortium (W3C)

Click on any string to get more details

P3P Validator 
P3P Validator 
W3C_CSS_Validator_JFouffa 
W3C CSS Validator, CSS validator for Cascading Style Sheets, level 2

Click on any string to get more details

W3C_CSS_Validator_JFouffa 2.0 
Jigsaw/2.2.5 W3C_CSS_Validator_JFouffa/2.0 
W3C_Validator 
W3C Markup Validation Service, checks Web documents in formats like HTML and XHTML for conformance to W3C Recommendations and other standards

Click on any string to get more details

W3C_Validator 1.654 
W3C_Validator/1.654 
W3C_Validator 1.606 
W3C_Validator/1.606 
W3C_Validator 1.591 
W3C_Validator/1.591 
W3C_Validator 1.575 
W3C_Validator/1.575 
W3C_Validator 1.555 
W3C_Validator/1.555 
W3C_Validator 1.432.2.5 
W3C_Validator/1.432.2.5 
W3C_Validator 1.432.2.22 
W3C_Validator/1.432.2.22 
W3C_Validator 1.432.2.19 
W3C_Validator/1.432.2.19 
W3C_Validator 1.432.2.10 
W3C_Validator/1.432.2.10 
W3C_Validator 1.305.2.12 
W3C_Validator/1.305.2.12 libwww-perl/5.64 
WDG_Validator 
WDG Web Design Group HTML Validator, Online HTML validator

Click on any string to get more details

WDG_Validator 1.6.2 
WDG_Validator/1.6.2

    */
}
