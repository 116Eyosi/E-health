import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:fluttertoast/fluttertoast.dart';
import 'package:http/http.dart' as http;
import 'Dash.dart';
import 'register.dart';




void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      theme: ThemeData(
        primarySwatch: Colors.blue,
        visualDensity: VisualDensity.adaptivePlatformDensity,
      ),
      home: ForgetP(),
    );
  }
}

class ForgetP extends StatefulWidget {
  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<ForgetP> {
  final GlobalKey<FormState>_key=GlobalKey<FormState>();
  TextEditingController user = TextEditingController();
  TextEditingController pass = TextEditingController();


  Future login() async {

    var url = Uri.parse("http://192.168.8.104/flutter/ForgetP.php");
    var response = await http.post(url, body: {
      "email": user.text,
      "id": pass.text,
    });

    if (response.statusCode == 200) {
      Fluttertoast.showToast(
          msg: ('login'),
          toastLength: Toast.LENGTH_SHORT,
          gravity: ToastGravity.CENTER,
          timeInSecForIosWeb: 1,
          backgroundColor: Colors.red,
          textColor: Colors.white,
          fontSize: 16.0);
      List results;

      var resBody = json.decode(response.body);
      results = resBody;

      Navigator.push(
          context,
          MaterialPageRoute(
            builder: (context) => SecondScreen(jsondata: results),
          ));


    }
    else if(response.statusCode==404) {
      Fluttertoast.showToast(
          msg: 'Wrong ID',
          toastLength: Toast.LENGTH_SHORT,
          gravity: ToastGravity.CENTER,
          timeInSecForIosWeb: 1,
          backgroundColor: Colors.red,
          textColor: Colors.white,
          fontSize: 16.0);
    }
    else{

    }

  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(


        title: Text(
          'Patient Login',
          style: TextStyle(fontWeight: FontWeight.bold),
        ),
      ),
      body: Container(
        width: double.infinity,
        height: double.infinity,

        color:Colors.blueGrey,

        child: Form(
          key:_key,
          child: Column(
            children: <Widget>[

              Padding(
                padding: const EdgeInsets.all(8.0),
                child: Text(
                  'Login',
                  style: TextStyle(fontSize: 25, fontWeight: FontWeight.bold),
                ),
              ),
              Padding(
                padding: const EdgeInsets.all(8.0),
                child: TextFormField(
                  validator: (value){
                    if(value==null||value.isEmpty)return "Field is Required";
                    String pattern=r'\w+@\w+\.\w+';
                    if(!RegExp(pattern).hasMatch(value))
                      return 'Invalid E-mail Address format.';

                    return null;},
                  decoration: InputDecoration(
                    labelText: 'Email',
                    prefixIcon: Icon(Icons.person),
                    border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(8)),
                  ),
                  controller: user,
                ),
              ),
              Padding(
                padding: const EdgeInsets.all(8.0),
                child: TextFormField(
    validator: (value){
    if(value==null||value.isEmpty)return "Field is Required";
    return null;},
                  obscureText: true,
                  decoration: InputDecoration(
                    labelText: 'ID',
                    prefixIcon: Icon(Icons.lock),
                    border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(8)),
                  ),
                  controller: pass,
                ),
              ),
              Row(
                children: <Widget>[
                  Expanded(
                    child: MaterialButton(
                      color: Colors.pink,
                      child: Text('Login By ID',
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.bold,
                              color: Colors.white)),
                      onPressed: () {
    if(_key.currentState!.validate()){
    _key.currentState!.save();

    login();

    }}
                      ,
                    ),
                  ),
                  SizedBox(width: 10),
                  Expanded(
                    child: MaterialButton(
                      color: Colors.pink,
                      child: Text('Register',
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.bold,
                              color: Colors.white)),
                      onPressed: ()
                      {
                        Navigator.push(
                            context,
                            MaterialPageRoute(
                              builder: (context) => Register(),
                            ));
                      },
                    ),
                  ),
                ],
              ),

            ],
          ),
        ),
      ),
    );
  }
}
