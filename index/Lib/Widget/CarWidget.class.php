<?php
class CarWidget extends Action {
    public $car = array(
        1 => array(
            'time' => '1959',
            'title' => 'Austin Mini',
            'pic' => '1.jpg',
            'content' => '英国面临严重的石油危机，就是在这样的背景下，英国BMC公司省油、便宜、轻巧的第一代Mini诞生了。设计师Issigonis爵士，采用四轮四角的设计，提供一个不错的车内空间和稳定性。有趣的是，设计图居然诞生于一张餐巾纸上。',
        ),
        2 => array(
            'time' => '1961',
            'title' => 'Mini Cooper',
            'pic' => '2.jpg',
            'content' => '1961年，第一代Mini Cooper诞生。由于第一代Mini的动力太弱，改装工程师John Cooper建议将其排量增大、动力加强，以提供给消费者更多的选择。运动版Mini由此而得名Mini Cooper。',
        ),
        3 => array(
            'time' => '1963',
            'title' => 'Mini Cooper S',
            'pic' => '3.jpg',
            'content' => 'John Cooper在Mini Cooper的基础上换装了排量更大，动力更强的发动机，命名为Mini Cooper S。你知道S代表什么吗？ Special! 凭借这辆车， Mini首次登上蒙特卡罗拉力赛冠军领奖台！',
        ),
        4 => array(
            'time' => '1967',
            'title' => 'Austin Mini850',
            'pic' => '4.jpg',
            'content' => '第二代Mini，动力方面与第一代一样。外观方面，进气格栅造型有所改变，车标上印有MK2字样，表示它为第二代车型。你数得清他密密的隔栅有几根吗？',
        ),
        5 => array(
            'time' => '1975',
            'title' => 'Mini 1000 LE',
            'pic' => '5.jpg',
            'content' => '这是Mini推出的全球第一款限量版车型。提供了布鲁克林绿以及白色两种颜色。仔细看，他终于有两个后视镜了！',
        ),
        6 => array(
            'time' => '1975',
            'title' => 'Mini Jubilee',
            'pic' => '6.jpg',
            'content' => '1975年，苏里南脱离荷兰独立，这款Mini Jubilee专为荷兰市场生产发售，限量1000台。',
        ),
        7 => array(
            'time' => '1976',
            'title' => 'Mini850City',
            'pic' => '7.jpg',
            'content' => '第四代车型还是采用850cc发动机，不过动力有所提升，外观方面则没有太多变化。',
        ),
        8 => array(
            'time' => '1979',
            'title' => 'Mini 1100 SPECIAL 20',
            'pic' => '8.jpg',
            'content' => '为了纪念Mini诞生20周年而推出的限量版。限量生产5100台，有银色和玫瑰色可选。特别设计的车身贴纸也随这部限量版的发售问世。',
        ),
        /*
        9 => array(
            'time' => '1980',
            'title' => 'Mini 1000 City',
            'pic' => '9.jpg',
            'content' => 'Mini推出了1.0升的基本款车型，替代原来的850cc发动机Mini。1.0升！突破！',
        ),
        10 => array(
            'time' => '1983',
            'title' => 'Mini by TRUSSARDI',
            'pic' => '10.jpg',
            'content' => 'Mini与TRUSSARDI品牌合作制造的限量版Mini。限量一台，采用了TRUSSARDI风格的内饰。想钻进去看看吗？',
        ),
        11 => array(
            'time' => '1983',
            'title' => 'Mini Sprite',
            'pic' => '11.jpg',
            'content' => 'Mini推出的雪碧限量版，车身有雪碧的标识，对轮眉进行了加宽处理，颜色方面有黄色和红色可选。内饰方面配备了一个四幅方向盘，以及一个三合一的仪表。',
        ),
        12 => array(
            'time' => '1984',
            'title' => 'Mini 25',
            'pic' => '12.jpg',
            'content' => '为纪念Mini生产25周年推出的限量版车型。限量5000台，银色外观灰色内饰，还配备了真皮包裹的方向盘，立体收音机。车身还有25周年徽标。',
        ),
        13 => array(
            'time' => '1986',
            'title' => 'Mini Picadlly',
            'pic' => '13.jpg',
            'content' => '这款车是皮卡迪利大商场限量版。车身为金色，车侧还有皮卡迪利的贴纸。镀铬保险杠，限量2500台。',
        ),
        14 => array(
            'time' => '1987',
            'title' => 'Mini Advantage',
            'pic' => '14.jpg',
            'content' => '这款为法国网球公开赛限量版，车身颜色为白色和白色轮圈罩。车身有网球风格的贴纸。内饰方面，座椅上也有网球标识。在英国限量2500辆。',
        ),
        15 => array(
            'time' => '1987',
            'title' => 'Mini Park Lane',
            'pic' => '15.jpg',
            'content' => '伯宁酒店限量版。伯宁酒店曾经是英国皇家府邸，是当代优雅的象征。车身印有伯宁贴纸，内饰则为黑白相间的设计。限量4000辆。',
        ),
        16 => array(
            'time' => '1988',
            'title' => 'Mini Designer',
            'pic' => '16.jpg',
            'content' => '这里的设计师指的是设计了迷你裙和迷你裤的英国时装设计师Mary Quant。这款车有黑白两种颜色可选，座椅也是黑白条纹的配色。',
        ),
        17 => array(
            'time' => '1988',
            'title' => 'Mini Belfast',
            'pic' => '17.jpg',
            'content' => '这款车仅对日本市场推出，名字来源于退役战舰贝尔法斯特。',
        ),
        18 => array(
            'time' => '1989',
            'title' => 'Mini 30',
            'pic' => '18.jpg',
            'content' => '为了纪念Mini 30周年而推出的纪念版，外观有樱桃红和黑色可选，保险杠和后视镜都加了镀铬装饰，座椅是黑色半真皮包裹造型，采用红色缝线。方向盘用红色真皮包裹。限量3000台。',
        ),
        19 => array(
            'time' => '1990',
            'title' => 'MINI RACING GREEN - FLAME RED - CHECK MATE',
            'pic' => '19.jpg',
            'content' => '赛车限量版Mini系列，车身有赛车绿、火热红和黑色，车顶为白色。车身还搭配相应贴纸。',
        ),
        20 => array(
            'time' => '1990',
            'title' => 'Mini Cooper RSP',
            'pic' => '20.jpg',
            'content' => '这款车是为了纪念Cooper而推出的限量版车型。有火焰红、英国绿和黑色可选，引擎盖上都有两条白道贴纸，上面还有John Cooper的签名。',
        ),
        21 => array(
            'time' => '1991',
            'title' => 'Mini TWININGS',
            'pic' => '21.jpg',
            'content' => '英国著名的唐宁茶与Mini合作限量版，车身为黑色，贴有唐宁的标志。仅在法国销售。',
        ),
        22 => array(
            'time' => '1992',
            'title' => 'Mini Mayfair',
            'pic' => '22.jpg',
            'content' => '第6代Mini，采用1.3升发动机。',
        ),
        23 => array(
            'time' => '1992',
            'title' => 'Mini ITALIAN JOB',
            'pic' => '23.jpg',
            'content' => '这款车是电影《意大利任务》推出的纪念版车型。红色、绿色、蓝色和白色可选。',
        ),
        24 => array(
            'time' => '1993',
            'title' => 'Mini COSMOPOLITAN',
            'pic' => '24.jpg',
            'content' => 'Mini与COSMOPOLITAN杂志合作推出的限量版车型。采用黑色外观，有COSMOPOLITAN贴纸，装备有飞利浦CD播放器。',
        ),
        25 => array(
            'time' => '1993',
            'title' => 'Mini SILVERSTONE',
            'pic' => '25.jpg',
            'content' => '银石赛道纪念版Mini。黑色车身贴有银石赛道贴纸，扩宽的轮拱，提供了一套六幅式轮圈。采用黑色真皮与织布组合座椅。',
        ),
        26 => array(
            'time' => '1994',
            'title' => 'Mini 35',
            'pic' => '26.jpg',
            'content' => 'Mini 35周年纪念车型。拥有镀铬进气格栅、门把手。还有可调节式大灯，能选装天窗。内饰方面全部采用真皮包裹。标配手动变速器还能选装自动变速器。',
        ),
        27 => array(
            'time' => '1994',
            'title' => 'Mini Cooper MONTE CARLO',
            'pic' => '27.jpg',
            'content' => '为了纪念1964年蒙特卡罗拉力赛获胜而推出的纪念款。在1994年正好是Mini赢得1964年蒙特卡罗拉力赛30周年，于是Mini推出了蒙特卡罗限量版，限量200辆。蒙特卡罗限量版Mini有黑色和红色外观可选，车身贴有与蒙特卡罗拉力赛有关的贴纸，内饰则采用大量红色真皮装饰。',
        ),
        28 => array(
            'time' => '1994',
            'title' => 'Mini Cooper Grand Prix',
            'pic' => '28.jpg',
            'content' => '格兰披治大赛限量版Mini，只推出35辆。拥有多种颜色可选，真皮的车门饰板、方向盘、中控台。动力方面也经过了比较大的改进。',
        ),
        29 => array(
            'time' => '1994',
            'title' => 'Mini BALMORAL',
            'pic' => '29.jpg',
            'content' => '与英国《Sidewalk》杂志联合推出的限量版车型，这款车以格子内饰而出名，限量1000台，后来又称Mini Tartan。',
        ),
        30 => array(
            'time' => '1996',
            'title' => 'Mini Cooper 35',
            'pic' => '30.jpg',
            'content' => 'Mini Cooper推出35周年纪念款车型。绿色车身、白色车顶。真皮座椅上和方向盘上都有纪念徽标。限量200台。',
        ),
        31 => array(
            'time' => '1996',
            'title' => 'Mini Chic',
            'pic' => '31.jpg',
            'content' => '宝马时代前最后一代Mini，搭载1.3升发动机，外观方面基本没有出现什么变化，而这也被称为经典Mini。',
        ),
        32 => array(
            'time' => '1998',
            'title' => 'Mini MONZA',
            'pic' => '32.jpg',
            'content' => '这款是以盟扎赛道命名的限量版车型，主要市场为德国，采用金属蓝色车漆，还有蒙扎贴纸。内饰方面有黑色真皮座椅，实木仪表，以及黑色地毯。共生产1250辆。',
        ),
        33 => array(
            'time' => '1998',
            'title' => 'Mini Paul Smith',
            'pic' => '33.jpg',
            'content' => '著名设计师保罗史密斯与Mini合作推出这款限量版车型。内饰采用他独特的色彩搭配设计。在英国限量生产3000台。',
        ),
        34 => array(
            'time' => '1999',
            'title' => 'Mini Cooper Sports LE',
            'pic' => '34.jpg',
            'content' => 'Mini推出的运动纪念款车型，车尾部有BMC的标识，算是一款具有纪念意义的车型。拥有绿色和黑色可选，内饰则采用绿色真皮包裹。限量发售100辆。',
        ),
        35 => array(
            'time' => '1998',
            'title' => 'Mini LA PAGAYO',
            'pic' => '35.jpg',
            'content' => '这是一个荷兰的著名时尚品牌，与Mini共同推出了这款限量版车型。车身侧面有明显的品牌标识。采用蓝色车身设计。',
        ),
        36 => array(
            'time' => '1999',
            'title' => 'Mini Cooper Limited Edition',
            'pic' => '36.jpg',
            'content' => '这是一款向老Mini Cooper致敬的产品。最大限度保留了老Mini Cooper车身的元素。',
        ),
        37 => array(
            'time' => '1999',
            'title' => 'Mini 40',
            'pic' => '37.jpg',
            'content' => 'Mini 40周年纪念车型，有多种颜色可选，车身多处都能找到40周年徽标。外观有镀铬的前保险杠、进气格栅、门把手。还可选装电动天窗。内饰采用真皮包裹。限量250辆。',
        ),
        */
    );

    public function getcar(){
        return $this -> car;
    }
}