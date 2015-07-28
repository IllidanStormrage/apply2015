#招新系统维护手册

##构成
1. Laravel框架
2. Redis缓存服务
3. Envoy(或者crontab)


##TODO
1. 监听写操作并通知更新缓存
2. 单元测试
3. 事件监听

##接口


	[	
		'status' => 200/400/401/403, //(正常, 数据错误, 身份未认证, 禁止),
		'info' => '成功/失败(错误信息)',
		'data' => []
	]
	
### 公共类接口

- 获取学院列表:

		url: api/academy
		method: get
		data: null
		return: 
		[
   			{
     	  			"id": 1, //学院id
     	  			"academy": "jsj",//学院名称
     	  			"school_id": 1 //学校id
    		},
    		{
        		"id": 2,
        		"academy": "tx",
        		"school_id": 1
   		 },
   		 {
        		"id": 3,
        		"academy": "cm",
        		"school_id": 1
   		 }
		]
	
	
### 组织内部人员/部门管理类接口

- 部门人员管理
	
	- 增 
	
			url: api/addmember
			method: post
			data: [
					'department_id' => 1, //部门id
					'role_id' => 2/3/4/5/6, //角色id
					'studentnum' => 2014xxxxxx //学号
					]
			return: 
					[
					'status' => 200/400/403, 
					'info' => '添加成功!/...../.....'
					]
	- 删 
	
			url: api/deletemember
			method: post
			data: [
					'department_id' => 1, //部门id
					'user_id' => 1, //用户id
				
					]
			return: 
					[
					'status' => 200/400/403, 
					'info' => '添加成功!/...../.....'
					]
	- 改 editmember
	
			url: api/deletemember
			method: post
			data: [
					'department_id' => 1, //部门id
					'user_id' => 1, //用户id
				
					]
			return: 
					[
					'status' => 200/400/403, 
					'info' => '添加成功!/...../.....'
					]
	- 查 	member

