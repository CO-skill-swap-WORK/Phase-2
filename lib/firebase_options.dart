// File generated by FlutterFire CLI.
// ignore_for_file: lines_longer_than_80_chars, avoid_classes_with_only_static_members
import 'package:firebase_core/firebase_core.dart' show FirebaseOptions;
import 'package:flutter/foundation.dart'
    show defaultTargetPlatform, kIsWeb, TargetPlatform;

/// Default [FirebaseOptions] for use with your Firebase apps.
///
/// Example:
/// ```dart
/// import 'firebase_options.dart';
/// // ...
/// await Firebase.initializeApp(
///   options: DefaultFirebaseOptions.currentPlatform,
/// );
/// ```
class DefaultFirebaseOptions {
  static FirebaseOptions get currentPlatform {
    if (kIsWeb) {
      return web;
    }
    switch (defaultTargetPlatform) {
      case TargetPlatform.android:
        return android;
      case TargetPlatform.iOS:
        return ios;
      case TargetPlatform.macOS:
        return macos;
      case TargetPlatform.windows:
        throw UnsupportedError(
          'DefaultFirebaseOptions have not been configured for windows - '
          'you can reconfigure this by running the FlutterFire CLI again.',
        );
      case TargetPlatform.linux:
        throw UnsupportedError(
          'DefaultFirebaseOptions have not been configured for linux - '
          'you can reconfigure this by running the FlutterFire CLI again.',
        );
      default:
        throw UnsupportedError(
          'DefaultFirebaseOptions are not supported for this platform.',
        );
    }
  }

  static const FirebaseOptions web = FirebaseOptions(
    apiKey: 'AIzaSyD24yx83bRog_NIRhZp587UjcwPQmWY86o',
    appId: '1:235080317318:web:a640ae1d2cfa71eccc1407',
    messagingSenderId: '235080317318',
    projectId: 'ieee-c8b6c',
    authDomain: 'ieee-c8b6c.firebaseapp.com',
    storageBucket: 'ieee-c8b6c.appspot.com',
  );

  static const FirebaseOptions android = FirebaseOptions(
    apiKey: 'AIzaSyAibDAtXfySBwnto3GCEJ9wHIpW6PB_pGU',
    appId: '1:235080317318:android:9ac40456703060f0cc1407',
    messagingSenderId: '235080317318',
    projectId: 'ieee-c8b6c',
    storageBucket: 'ieee-c8b6c.appspot.com',
  );

  static const FirebaseOptions ios = FirebaseOptions(
    apiKey: 'AIzaSyDRjvRrMDKw32WqFLTIv2yZsovckbJRnZQ',
    appId: '1:235080317318:ios:6bd0f0f82028d8f8cc1407',
    messagingSenderId: '235080317318',
    projectId: 'ieee-c8b6c',
    storageBucket: 'ieee-c8b6c.appspot.com',
    iosClientId: '235080317318-uclmob5pni8utnsbfj2bcicfrq5ta7pd.apps.googleusercontent.com',
    iosBundleId: 'com.example.ieeeApp',
  );

  static const FirebaseOptions macos = FirebaseOptions(
    apiKey: 'AIzaSyDRjvRrMDKw32WqFLTIv2yZsovckbJRnZQ',
    appId: '1:235080317318:ios:fa36184755ca8d5ecc1407',
    messagingSenderId: '235080317318',
    projectId: 'ieee-c8b6c',
    storageBucket: 'ieee-c8b6c.appspot.com',
    iosClientId: '235080317318-1s611d3vefecb3eqg7ttueag3o1kgd3l.apps.googleusercontent.com',
    iosBundleId: 'com.example.ieeeApp.RunnerTests',
  );
}
