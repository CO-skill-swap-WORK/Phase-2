import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:ieee_app/app/resourse/assets_manager.dart';
import 'package:ieee_app/app/resourse/color_manager.dart';
import 'package:lottie/lottie.dart';

class SplashView extends StatefulWidget {
  const SplashView({super.key});
  @override
  State<StatefulWidget> createState() => _SplashViewState();
}

class _SplashViewState extends State<SplashView> {
  @override
  Widget build(BuildContext context) {
    return _Screen();
  }

  _Screen() {
    return Scaffold(
      backgroundColor: ColorManager.primaryColorOfWhite,
      appBar: AppBar(
        backgroundColor: ColorManager.primaryColorOfWhite,
        elevation: 0,
        systemOverlayStyle: SystemUiOverlayStyle(
            statusBarColor: ColorManager.primaryColorOfWhite),
      ),
      body: Center(
        child: SizedBox(
          height: 150,
          width: 150,
          child: LottieBuilder.asset(JsonAssetes.logoJson),
        ),
      ),
    );
  }
}
