import 'dart:convert';
import 'package:e_health/main.dart';
import 'package:e_health/patient/patient.dart';
import 'package:flutter/material.dart';
import 'package:fluttertoast/fluttertoast.dart';
import 'package:http/http.dart' as http;




class UpdateP extends StatefulWidget {
  final List list;
  final int index;
  UpdateP({required this.list, required this.index});

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<UpdateP> {
final GlobalKey<FormState> _key=GlobalKey<FormState>();
  TextEditingController Fname = TextEditingController();
  TextEditingController Lname = TextEditingController();
  TextEditingController email = TextEditingController();
  TextEditingController pass = TextEditingController();
  TextEditingController contact = TextEditingController();
  TextEditingController age = TextEditingController();
  TextEditingController Ename = TextEditingController();
  TextEditingController Econtact = TextEditingController();
  bool editMode = false;

  Future update() async {
    var url = Uri.parse("http:///flutter/updateP.php");
    var response = await http.post(url, body: {
      'P_id': widget.list[widget.index]['P_id'],
      'First_Name': Fname.text,
      'Last_Name': Lname.text,
      'email': email.text,
      'password': pass.text,
      'contact': contact.text,
      'age': age.text,
      'EN': Ename.text,
      'EC': Econtact.text,

    });
    if (response.statusCode == 200) {
      Fluttertoast.showToast(
          msg: "Updated",
          toastLength: Toast.LENGTH_SHORT,
          gravity: ToastGravity.CENTER,
          timeInSecForIosWeb: 1,
          backgroundColor: Colors.red,
          textColor: Colors.white,
          fontSize: 16.0);
      Navigator.push(
          context, MaterialPageRoute(builder: (Context) => Patient()));
    }
    else if (response.statusCode == 404) {
      Fluttertoast.showToast(
          msg: "Error",
          toastLength: Toast.LENGTH_SHORT,
          gravity: ToastGravity.CENTER,
          timeInSecForIosWeb: 1,
          backgroundColor: Colors.red,
          textColor: Colors.white,
          fontSize: 16.0);
    }
  }
  @override
  void initState() {
    super.initState();
  }

  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Profile Update',
          style: TextStyle(fontWeight: FontWeight.bold),
        ),
        centerTitle: true,
      ),
      body: Form(
        key:_key,
        child: ListView
          (children: [
          Column(
            children: <Widget>[
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'First Name',
                  prefixIcon: Icon(Icons.person),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: Fname,
              ),
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'Last Name',
                  prefixIcon: Icon(Icons.person),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: Lname,
              ),
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  String pattern=r'\w+@\w+\.\w+';
                  if(!RegExp(pattern).hasMatch(value))
                    return 'Invalid E-mail Address format.';

                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'email',
                  prefixIcon: Icon(Icons.email),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: email,

              ),
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                obscureText: true,
                decoration: InputDecoration(
                  labelText: 'Password',
                  prefixIcon: Icon(Icons.lock),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: pass,

              ),
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'Contact',
                  prefixIcon: Icon(Icons.person),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: contact,
              ),
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'Age',
                  prefixIcon: Icon(Icons.person),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: age,
              ),
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'Emergency Name',
                  prefixIcon: Icon(Icons.person),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ), controller: Ename,
              ),
              TextFormField(
                validator: (value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'Emergency Contact',
                  prefixIcon: Icon(Icons.person),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: Econtact,
              ),

              Row(
                children: <Widget>[

                  Expanded(
                    child: MaterialButton(
                      color: Colors.pink,
                      child: Text('Update',
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.bold,
                              color: Colors.white)),
                      onPressed: () {
                        if(_key.currentState!.validate()){
                          _key.currentState!.save();
                        update();
                        }
                      },
                    ),
                  ),
                  SizedBox(width:30),
                  Expanded(
                    child: MaterialButton(
                      color: Colors.pink,
                      child: Text('Back',
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.bold,
                              color: Colors.white)),
                      onPressed: () {
    Navigator.push(
    context, MaterialPageRoute(builder: (Context) => Patient()));
    }
                      ,
                    ),
                  ),
                ],
              )
            ],
          ),
        ]),
      ),
    );
  }
}
