
import 'package:flutter/material.dart';
import 'package:fluttertoast/fluttertoast.dart';
import 'package:http/http.dart' as http;
import 'package:intl/intl.dart';
import 'package:datetime_picker_formfield/datetime_picker_formfield.dart';

import 'DoctorList.dart';


class SetP extends StatefulWidget {
  final List list;
  final int index;
  SetP({required this.list, required this.index});


  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<SetP> {
  final GlobalKey<FormState>_key=GlobalKey<FormState>();
  TextEditingController p_id = TextEditingController();
  TextEditingController pname = TextEditingController();
  TextEditingController datetime = TextEditingController();
  TextEditingController time = TextEditingController();
  bool editMode=false;

  Future SetAppP() async {

    var url = Uri.parse("http://192.168.8.104/flutter/Pset.php");
    var response = await http.post(url, body: {
      'D_id':widget.list[widget.index]['D_id'],
      'Fname':widget.list[widget.index]['Fname'],
      'P_id':p_id.text,
      'pn':pname.text,
      'date':datetime.text,

    });
    Fluttertoast.showToast(
        msg: "Send Succesful",
        toastLength: Toast.LENGTH_SHORT,
        gravity: ToastGravity.CENTER,
        timeInSecForIosWeb: 1,
        backgroundColor: Colors.red,
        textColor: Colors.white,
        fontSize: 16.0);
Navigator.push(context,MaterialPageRoute(builder: (Context)=>DList()));

  }
  @override
  void initState(){

    editMode=true;

    super.initState();
  }
  Widget build(BuildContext context) {
    final format=DateFormat('yyyy-MM-dd  HH:mm');

    return Scaffold(
      appBar: AppBar(

        title: Text(
          'Set Appointment',
          style: TextStyle(fontWeight: FontWeight.bold),
        ),
        centerTitle: true,
      ),
      body: Form(
        key: _key,
        child: ListView(
            children: [
              Column(
                children: <Widget>[


                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Text(
                      'Set Appointment',
                      style: TextStyle(fontSize: 25, fontWeight: FontWeight.bold),
                    ),
                  ),
                  Padding(
                    padding: EdgeInsets.all(16.0),
                    child: DateTimeField(format:format,
                        validator: (value){
                         if(value==null)return 'Date and Time required';
                         return null;
                        },
                        controller: datetime,
                        decoration: InputDecoration(
                          border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(8)),
                          hintText: 'Input Date And Time',
                        ),
                        onShowPicker:(context,currentValue)async{
                          final date=await showDatePicker(context:context,
                              initialDate:currentValue ?? DateTime.now(),firstDate:DateTime(2000), lastDate:DateTime(2100));
                          if(date!=null){
                            final time=await showTimePicker(context: context, initialTime: TimeOfDay.fromDateTime(currentValue ?? DateTime.now()));

                            return DateTimeField.combine(date, time);
                          }

                          else{
                            return currentValue;
                          }
                        }),
                  ),

                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: TextFormField(
                      validator: (value){
                        if(value==null||value.isEmpty)return 'Feild is Required';
                        return null;
                      },
                      controller:p_id,
                      decoration: InputDecoration(
                        labelText: 'P_id',
                        prefixIcon: Icon(Icons.label),
                        border: OutlineInputBorder(
                            borderRadius: BorderRadius.circular(8)),
                      ),

                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: TextFormField(
                      validator: (value){
                        if(value==null||value.isEmpty)return 'Field is Required';
                        return null;
                      },
                      decoration: InputDecoration(
                        labelText: 'your name',
                        prefixIcon: Icon(Icons.person),
                        border: OutlineInputBorder(
                            borderRadius: BorderRadius.circular(8)),
                      ),
                      controller: pname,
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
                           SetAppP();
                            }

                          },
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