

<html>
<head>
    <title>查询结果</title>
    <meta http-equiv="content-type" content="text/html;charset=gb2312">

    <style>
        body{
            padding:0px;
            margin:0px;
            font-size:10.5pt;
            background-color:#EFEFEF;
        }
        .head{
            background-color:#5E972A;
            color:#FFFFFF;
            font-size:12pt;
            text-align:center;
            font-weight:bold;
            padding:10px;
        }
        .yinying{
            -moz-box-shadow:1px 1px 2px #999999;
            -webkit-box-shadow:1px 1px 2px #999999;
            box-shadow:1px 1px 1px 2px #CCCCCC;
        }

        .list{
            padding:10px;
        }
        .list .title{
            padding:8px;
            border-radius:3px;
            margin-bottom:10px;
            font-weight:bold;
            background-color:#5E972A;
            color:white;
        }
        .list .info{
            font-size:9pt;
            background-color:#FFFFFF;
            margin-bottom:10px;
            border-radius:3px;
            padding-left:10px;
            color:#333333;
        }
        .list .info div{
            padding:10px;
            padding-left:0px;
            padding-right:5px;
            border-bottom:solid #EFEFEF 1px;
            line-height:200%;
        }
        .list .info div:last-of-type{
            border:none;
        }
        .list .info div font{
            color:#009900;
            font-weight:bold;
        }
        .list .info div B{
            color:#000099;
        }
    </style>
</head>
<body>
<table width="100%" height="100%"><tr><td align="center"><table width="400"><tr><td style="padding:0px;border-radius:5px;">
                        <div class="head">农药产品二维码查询结果 {{strlen('201805260010011694')}} </div>
                        <div class="list">
                            <div class="title yinying">■ 查询结果</div>
                            <div class="info yinying">
                                <div>
                                    当前追溯码（<font>已激活</font>）：<br>11416241000791675443274991659561
                                </div>
                            </div>
                            <div class="title yinying">■ 农药产品信息</div>
                            <div class="info yinying">
                                <div>
                                    <font>登记证号：</font><B>PD20141624</B>
                                </div>

                                <div>
                                    <font>农药生产批准证号：</font>HNP13042-A6681
                                </div>

                                <div>
                                    <font>执行质量标准：</font>Q/HBBJ48-2015
                                </div>

                                <div>
                                    <font>农药名称：</font>茚虫威
                                </div>
                                <div>
                                    <font>登记证持有人：</font>河北博嘉农业有限公司
                                </div>
                                <div>
                                    <font>有效成分总含量：</font>15%
                                </div>
                                <div>
                                    <font>剂型：</font>悬浮剂
                                </div>
                                <div>
                                    <font>毒性：</font>低毒
                                </div>
                            </div>
                            <div class="title yinying">■ 生产信息</div>
                            <div class="info yinying">
                                <div>
                                    <font>产品规格：</font>20ml(瓶)
                                </div>


                                <div>
                                    <font>单元序号：</font>201805260010011694
                                </div>

                                <div>
                                    <font>质检结果：</font>合格
                                </div>
                            </div>
                            <div class="title yinying">■ 扫码记录</div>
                            <div class="info yinying">
                                <div>
                                    <font>扫码次数：</font>26
                                </div>
                                <div>
                                    <font>最后扫码时间：</font>{{date('Y-m-d H:i:s')}}
                                </div>
                                <div>
                                    注：同一设备连续扫码仅记录1次。
                                </div>
                            </div>
                        </div>
                    </td></tr></table></td></tr></table>
</body>
</html>
