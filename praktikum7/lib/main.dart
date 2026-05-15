import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: const Text("Belajar Widget Dasar"),
          backgroundColor: Colors.blue,
        ),
        // Kita pakai SingleChildScrollView supaya halamannya bisa di-scroll ke bawah
        body: SingleChildScrollView(
          child: Padding(
            padding: const EdgeInsets.all(15.0),
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [

                // --- 1. CONTAINER (Kotak Berwarna) ---
                const Text("1. Ini Container", style: TextStyle(fontWeight: FontWeight.bold)),
                Container(
                  margin: const EdgeInsets.symmetric(vertical: 10),
                  height: 100,
                  width: 100, // Kotak kecil
                  color: Colors.amber,
                  child: const Center(child: Text("Kotak")),
                ),

                const Divider(thickness: 2),

                // --- 2. STACK (Tampilan Bertumpuk) ---
                const Text("2. Ini Stack (Numpuk)", style: TextStyle(fontWeight: FontWeight.bold)),
                const SizedBox(height: 10),
                Stack(
                  children: [
                    Container(height: 100, width: 100, color: Colors.red),
                    Container(height: 70, width: 70, color: Colors.green),
                    const Text("Paling Atas", style: TextStyle(color: Colors.white)),
                  ],
                ),

                const Divider(thickness: 2),

                // --- 3. GRIDVIEW (Grid Minimal 6 Item) ---
                const Text("3. Ini GridView (6 Item)", style: TextStyle(fontWeight: FontWeight.bold)),
                const SizedBox(height: 10),
                GridView.count(
                  crossAxisCount: 3, // Bagi 3 kolom
                  shrinkWrap: true, // Supaya tidak error di dalam Column
                  physics: const NeverScrollableScrollPhysics(), // Matikan scroll grid-nya saja
                  children: [
                    Container(color: Colors.blue, margin: const EdgeInsets.all(2), child: const Center(child: Text("1"))),
                    Container(color: Colors.orange, margin: const EdgeInsets.all(2), child: const Center(child: Text("2"))),
                    Container(color: Colors.pink, margin: const EdgeInsets.all(2), child: const Center(child: Text("3"))),
                    Container(color: Colors.purple, margin: const EdgeInsets.all(2), child: const Center(child: Text("4"))),
                    Container(color: Colors.teal, margin: const EdgeInsets.all(2), child: const Center(child: Text("5"))),
                    Container(color: Colors.brown, margin: const EdgeInsets.all(2), child: const Center(child: Text("6"))),
                  ],
                ),

                const Divider(thickness: 2),

                // --- 4. LISTVIEW (Manual A, B, C) ---
                const Text("4. Ini ListView Biasa", style: TextStyle(fontWeight: FontWeight.bold)),
                SizedBox(
                  height: 120,
                  child: ListView(
                    children: const [
                      Text("Item A"),
                      Text("Item B"),
                      Text("Item C"),
                    ],
                  ),
                ),

                const Divider(thickness: 2),

                // --- 5. LISTVIEW BUILDER (Otomatis dari Array) ---
                const Text("5. Ini ListView Builder", style: TextStyle(fontWeight: FontWeight.bold)),
                ListView.builder(
                  shrinkWrap: true,
                  physics: const NeverScrollableScrollPhysics(),
                  itemCount: 3, // Jumlah item
                  itemBuilder: (context, index) {
                    return Text("Data List ke- $index");
                  },
                ),

                const Divider(thickness: 2),

                // --- 6. LISTVIEW SEPARATED (Pake Garis Pembatas) ---
                const Text("6. Ini ListView Separated", style: TextStyle(fontWeight: FontWeight.bold)),
                ListView.separated(
                  shrinkWrap: true,
                  physics: const NeverScrollableScrollPhysics(),
                  itemCount: 3,
                  itemBuilder: (context, index) => Text("Baris $index"),
                  separatorBuilder: (context, index) => const Divider(color: Colors.black), // Garis pembatas
                ),

              ],
            ),
          ),
        ),
      ),
    );
  }
}