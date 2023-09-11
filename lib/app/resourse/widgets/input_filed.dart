import 'package:flutter/material.dart';
import 'package:ieee_app/app/resourse/app_sizes.dart';
import 'package:ieee_app/app/resourse/color_manager.dart';

class TextFiledCustome extends StatelessWidget {
  final String title;
  final TextEditingController controller;
  const TextFiledCustome({
    super.key,
    required this.title,
    required this.controller,
  });

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.all(AppSize.s20),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Padding(
            padding: const EdgeInsets.all(AppSize.s4),
            child: Text(
              title,
              style: Theme.of(context).textTheme.titleMedium,
            ),
          ),
          TextField(
            focusNode: FocusNode(canRequestFocus: true),
            controller: controller,
            decoration: InputDecoration(
              filled: true,
              fillColor: ColorManager.primaryColorWhite,
              border: OutlineInputBorder(
                borderRadius: BorderRadius.circular(
                  AppSize.s10,
                ),
              ),
            ),
          ),
        ],
      ),
    );
  }
}
