//新生信息
//
//顺序id 面试编号 学号 姓名 性别 手机号 学院 是否已经报名其他部门 状态 自我简介
//
//状态
//
//1 已录取，用户已确认
//2 录取中，用户已超过一天未确认
//3 录取中，待用户确认
//4 已通过
//5 待审核
//6 未通过
//7 用户已取消
//8 用户已被其他校级组织录取

//排序 搜索

var a = ["赵", "钱", "孙", "李", "周", "吴", "郑", "王", "冯", "陈", "楮", "卫", "蒋", "沈", "韩", "杨", "朱", "秦", "尤", "许", "何", "吕", "施", "张", "孔", "曹", "严", "华", "金", "魏", "陶", "姜", "戚", "谢", "邹", "喻", "柏", "水", "窦", "章", "云", "苏", "潘", "葛", "奚", "范", "彭", "郎", "鲁", "韦", "昌", "马", "苗", "凤", "花", "方", "俞", "任", "袁", "柳", "酆", "鲍", "史", "唐", "费", "廉", "岑", "薛", "雷", "贺", "倪", "汤", "滕", "殷", "罗", "毕", "郝", "邬", "安", "常", "乐", "于", "时", "傅", "皮", "卞", "齐", "康", "伍", "余", "元", "卜", "顾", "孟", "平", "黄"];
var b = "丰源 为民 祥熙 言卿 卿舒 柳贵 枝盛 莱彬 世吉 永祺 奕一 培致 修为 伟珍 山东 国邑 春蕴 珂菲 广博 文书 春刚 宏阳 宾盟 锡明 天印 琰沣 恒铭 天晴 钧涵 佳宇 梓言 志勇 家乐 珧冬 若木 启波 久宣 城瑞 异才 传舫 奕灿 依培 嘉欣 艳秋 传祥 传禄 志强 焕兴 志嘉 依衡 传荣 映廷 成宏 欣鑫 如钰 天宇 一帆 钦泽 鑫源 又铭 恒伟 鹭洋 勇清 霈泽 珂佳 遥来 乘昊 永靖 小军 永静 汉元 依潼 依凡 欣瑜 逸樊 圣祥 楠楠 传方 欣尉 函珏 德友 英智 双庆 子辰 子芯 蒙蒙 玮檬 牧归 佳龙 靖心 炜航 玉平 江华 兴友 嘉锦 东峰 传贵 逸矾 传福 海语 矾逸 文吉 知娴 任杰 豫坤 留生 策驰 振中 林峰 浩云 远葸 清瑜 墨晗 龙飞 宗良 维顺 瀚辰 改珍 思敏 长春 孟钰 桐瑞 星月 中源 季恒 书帛 炀霏 龙斌 卉霖 玮宏 永明 宇浩 少春 续豪 雁君 誉玮 培杰 壁霰 一玮 一薄 添睿 海轩 嘉辉 嘉欣 健烨 周华 泰国 月康 建雄 京津 军生 致齐 书显 建新 金利 力千 轴毛 钊幸 珏珲 先涛 泞鹪 庆昌 顺香 梦暄 欣逸 晓坤 广应 其运 淇兴 镜桦 凯岳 敬海 振宇 锦容 锡海 钧玮 庆敏 文龙 逢厅 祚玮 全民 兴碧 乙默 金元 书含 利仁 宝涛 佳明 筱璇 思帅 政翰 宇博 文会 稼傲 佳烈 稼音 稼金 稼辛 稼竹 富豪 林丰 梁宏 临峰 临锋 传澎 矾豫 晓东 临风 传卿 若然 传鑫 凌风 大为 力仁 允灏 品言".split(" ");
var c = ["男","女"];
var d = ["软件学院","计算机学院","通信学院","传媒学院","自动化学院","外国语学院","经管学院"];
var info = [];

for(var i = 0 ; i <1000 ; i++){
    var INFO = [i,parseInt(10000*Math.random()),20142100000+parseInt(40000*Math.random()),a[parseInt(96*Math.random())]+b[parseInt(216*Math.random())],c[parseInt(1.5*Math.random())],10000000000+parseInt(10000000000*Math.random()),d[parseInt(7*Math.random())],1-parseInt(1.2*Math.random()),parseInt(8*Math.random())+1,""];
    info[i] = [];
    info[i] = INFO;
}





var $Obj = $(".info-table-tboby");





var searchArr = info.slice(0);
var $pointer = $(".pointer");
var $more = $(".more");
var $form = $(".form-body");
var indexNum = 0;
var indexSortNum = 0;

$pointer.on("click",function(){
    var $this = $(this);
    var sortNum = $this.data("sortnum");
    var arrangement = $this.attr("arrangement");
    quickSort(searchArr,sortNum,0,999);
    $Obj.empty();
    indexNum = 0;
    $pointer.attr("arrangement","0");
    indexSortNum = arrangement;
    $this.attr("arrangement",(+indexSortNum+1)%2);
    creatStus();
});

$($pointer[2]).click();

$more.on("click",function(){
    indexNum = indexNum+20;
    creatStus();
});




function partition(array,num,first,end){
    var i = first;
    var j = end;
    var mid = [];
    while(i<j){
        while (i<j && array[i][num]<=array[j][num]) j--;
        if(i<j){
            mid = array[i];
            array[i] = array[j];
            array[j] = mid;
            i++;
        }
        while (i<j && array[i][num]<=array[j][num]) i++;
        if(i<j){
            mid = array[i];
            array[i] = array[j];
            array[j] = mid;
            j--;
        }
    }
    return i;
}

function quickSort(array,num,first,end){
    if(first<end){
        var pivot = partition(array,num,first,end);
        quickSort(array,num,first,pivot-1);
        quickSort(array,num,pivot+1,end);
    }
}

function creatStus() {
    if(indexSortNum == 0){
        for(var i = 0; i < 20; i++){
            creatStu($Obj,searchArr[i+indexNum]);
        }
    }else{
        for(var i = 0; i < 20; i++){
            creatStu($Obj,searchArr[999-(i+indexNum)]);
        }
    }
}

function creatStu(obj,info){

    var tr = $("<tr>",{
        "data-id" : info[0],
        "type":"button",
        "data-target":"#information",
        "data-toggle":"modal"
    }).appendTo(obj);
//顺序id 面试编号 学号 姓名 性别 手机号 学院 是否已经报名其他部门 状态 自我简介
    tr.on("click",function(){
        var id = $(this).data("id");
        $form.find(".name .col-md-9").text(info[3]);
        $form.find(".sex .col-md-9").text(info[4]);
        $form.find(".num .col-md-9").text(info[1]);
        $form.find(".ID .col-md-9").text(info[2]);
        $form.find(".academy .col-md-9").text(info[6]);
        $form.find(".phoneNum .col-md-9").text(info[5]);
        $form.find(".introduction .col-md-9").text(info[9]);
        $form.find(".bool .col-md-9").text(info[7]);
        console.log(info[+id]);
        console.log(+id);
        console.log(info);

    });

    $("<td>",{
        "text" : info[1]
    }).appendTo(tr);

    $("<td>",{
        "text" : info[2]
    }).appendTo(tr);

    $("<td>",{
        "text" : info[3]
    }).appendTo(tr);

    $("<td>",{
        "text" : info[4]
    }).appendTo(tr);

    $("<td>",{
        "text" : info[6]
    }).appendTo(tr);

    $("<td>",{
        "text" : info[5]
    }).appendTo(tr);

    var zhuangtai = "";
    switch (info[8]){
        case 1:
            zhuangtai = "已录取，用户已确认";
            break;
        case 2:
            zhuangtai = "录取中，用户已超过一天未确认";
            break;
        case 3:
            zhuangtai = "录取中，待用户确认";
            break;
        case 4:
            zhuangtai = "已通过";
            break;
        case 5:
            zhuangtai = "待审核";
            break;
        case 6:
            zhuangtai = "未通过";
            break;
        case 7:
            zhuangtai = "用户已取消";
            break;
        case 8:
            zhuangtai = "用户已被其他校级组织录取";
            break;
    }
    $("<td>",{
        "text" : zhuangtai
    }).appendTo(tr);

}


