abstract class BaseViewModel extends BaseViewModelInput
    implements BaseViewModeOutput {}

abstract class BaseViewModelInput {
  void start();
  void dispose();
}

abstract class BaseViewModeOutput {}
