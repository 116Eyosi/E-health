
import 'dart:io';
import 'package:flutter/material.dart';
import 'package:fluttertoast/fluttertoast.dart';
import 'package:http/http.dart' as http;
import 'package:image_picker/image_picker.dart';
import '../main.dart';
import 'admin.dart';

class RegisterD extends StatefulWidget {
  @override
  _RegisterState createState() => _RegisterState();
}

class _RegisterState extends State<RegisterD> {
  File? _image;
  final picker = ImagePicker();
final GlobalKey<FormState>_key=GlobalKey<FormState>();
  TextEditingController Fname = TextEditingController();
  TextEditingController Lname = TextEditingController();
  TextEditingController email = TextEditingController();
  TextEditingController pass = TextEditingController();
  TextEditingController contact = TextEditingController();
  TextEditingController department = TextEditingController();
  //choice Image
  Future choiceImage()async{
    var pickedImage = await picker.getImage(source: ImageSource.gallery);
    setState(() {
      _image = File(pickedImage!.path);
    });
  }

  Future register() async {
    final uri = Uri.parse("http://192.168.8.104/flutter/RegD.php");

    var request = http.MultipartRequest('POST',uri);
    request.fields['First_Name'] = Fname.text;
    request.fields['Last_Name'] = Lname.text;
    request.fields['email']=email.text;
    request.fields['password']=pass.text;
    request.fields['contact'] = contact.text;
    request.fields['department']=department.text;
    var pic = await http.MultipartFile.fromPath("image", _image!.path);
    request.files.add(pic);
    var response = await request.send();

    if (response.statusCode == 200) {
      // ignore: use_build_context_synchronously
      Fluttertoast.showToast(
          msg:"Registered",
          toastLength: Toast.LENGTH_SHORT,
          gravity: ToastGravity.CENTER,
          timeInSecForIosWeb: 1,
          backgroundColor: Colors.red,
          textColor: Colors.white,
          fontSize: 16.0);
      Navigator.push(context,MaterialPageRoute(builder: (context)=>AdminD()));
    } else {
      Fluttertoast.showToast(
          msg: "Not Working",
          toastLength: Toast.LENGTH_SHORT,
          gravity: ToastGravity.CENTER,
          timeInSecForIosWeb: 1,
          backgroundColor: Colors.red,
          textColor: Colors.white,

      );
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(

        title: Text(
          'SignUp',
          style: TextStyle(fontWeight: FontWeight.bold),
        ),
      ),
      body: Container(


        width: double.infinity,
        height: double.infinity,

        color:Colors.blueGrey,
        child: Form(
          key:_key,
          child: ListView(
            children: <Widget>[
              Text(
                'Register',

                style: TextStyle(fontSize: 40, fontWeight: FontWeight.bold),
              ),
              SizedBox(height: 20,),
              TextFormField(
                validator:(value){
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
                validator:(value){
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
                validator:(value){
                  if(value==null||value.isEmpty)return "Field is Required";
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
                validator:(value){
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
                validator:(value){
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
                validator:(value){
                  if(value==null||value.isEmpty)return "Field is Required";
                  return null;
                },
                decoration: InputDecoration(
                  labelText: 'Department',
                  prefixIcon: Icon(Icons.email),
                  border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(10)),
                ),
                controller: department,

              ),
            Text('Choose Image Required'),
              IconButton(
                icon: Icon(Icons.camera),
                onPressed: () {
                  choiceImage();
                },
              ),
              Container(
                  child:_image==null? Text('no Image Selectd'):Image.file(_image!),width:40,height:40),
              Row(
                children: <Widget>[
                  Expanded(
                    child: MaterialButton(
                      color: Colors.pink,
                      child: Text('Register',
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.bold,
                              color: Colors.white)),
                      onPressed: () {
                        register();
                      },
                    ),
                  ),

                  SizedBox(width: 10,),
                  Expanded(
                    child: MaterialButton(
                      color: Colors.pink,
                      child: Text('Login',
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.bold,
                              color: Colors.white)),
                      onPressed: () {
                        Navigator.push(
                          context,
                          MaterialPageRoute(
                            builder: (context) => MyHomePage(),
                          ),
                        );
                      },
                    ),
                  ),
                ],
              )
            ],
          ),
        ),
      ),
    );
  }
}
