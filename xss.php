<!演示XSS的 html>
<html>
<head>
    
    <meta charset="utf-8">
    </head>
    <style type="text/css">
        .comment-title{
            font-size:14px;
            margin: 6px 0px 2px 4px;
        }
        .comment-body{
            font-size: 14px;
            color:#ccc;
            font-style: italic;
            border-bottom: dashed 1px #ccc;
            margin: 4px;
        }
    </style>
    <script type="text/javascript" src="/js/cookies.js"></script>
<body>
    <form method="post" action="list.php">
        <div style="margin:20px;">
            <div style="font-size:16px;font-weight:bold;">发表评论</div>
            <div style="padding:6px;">
                昵称:
                <br/>
                <input name="name" type="text" style="width:300px;"/>
            </div>
            <div style="padding:6px;">
                评论:
                <br/>
                <textarea name="comment" style="height:100px; width:300px;"></textarea>
            </div>
            <div style="padding-left:230px;">
                <input type="submit" value="POST" style="padding:4px 0px; width:80px;"/>
            </div>
            <div style="border-bottom:solid 1px #fff;margin-top:10px;">
                <div style="font-size:16px;font-weight:bold;">评论集</div>
            </div>
            <?php 
                require('/components/comments.php'); 
                if(!empty($_POST['name'])){
                    //<!--添加新的评论>
                    addElement($_POST['name'],$_POST['comment']);
                }
                //<!展开评论列表>
                renderComments();
            ?>
        </div>
    </form>
</body>
</html>
