
import 'package:fluttertoast/fluttertoast.dart';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;



class Set extends StatefulWidget {
  final List list;
  final int index;
  Set({required this.list, required this.index});


  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<Set> {
  final GlobalKey<FormState>_key=GlobalKey<FormState>();
  TextEditingController perm = TextEditingController();
  bool editMode=false;

  Future SetApp() async {

    var url = Uri.parse("http://192.168.8.104//flutter/setApp.php");
    var response = await http.post(url, body: {
      'app_id':widget.list[widget.index]['app_id'],
      'permission': perm.text,

    });
    Fluttertoast.showToast(
        msg:'Send Succesful',
        toastLength: Toast.LENGTH_SHORT,
        gravity: ToastGravity.CENTER,
        timeInSecForIosWeb: 1,
        backgroundColor: Colors.red,
        textColor: Colors.white,
        fontSize: 16.0);
        Navigator.pop(context);


  }
  @override
  void initState(){
    editMode=true;
    if(widget.index!=null){
      perm.text=widget.list[widget.index]['permission'];
    }
    super.initState();
  }
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Set Appointment',
          style: TextStyle(fontWeight: FontWeight.bold),
        ),
        centerTitle: true,
      ),
      body: Container(
        height: 600,
        child: Card(
          color: Colors.blueGrey,
          child: Form(
            key: _key,
            child: Column(
              children: <Widget>[
                Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: Text(
                    'Approve or decline',
                    style: TextStyle(fontSize: 25, fontWeight: FontWeight.bold),
                  ),
                ),

                Padding(
                  padding: const EdgeInsets.all(8.0),
                  child: TextFormField(
                           validator: (value){
                             if(value==null||value.isEmpty)return "Field is Required";
                             return null;
                           },
                    decoration: InputDecoration(
                      labelText: 'Permission',
                      prefixIcon: Icon(Icons.schedule_send),
                      border: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(8)),
                    ),
                    controller: perm,
                  ),
                ),
                Row(
                  children: <Widget>[
                    Expanded(
                      child: MaterialButton(
                        color: Colors.pink,
                        child: Text('set',
                            style: TextStyle(
                                fontSize: 20,
                                fontWeight: FontWeight.bold,
                                color: Colors.white)),
                        onPressed: () {

                          if(_key.currentState!.validate()){
                          _key.currentState!.save();
                          SetApp();
                          }

                        },
                      ),
                    ),

                  ],
                )
              ],
            ),
          ),
        ),
      ),
    );
  }
}