<?php
trait Response
{
  public function render(string $view, ?array $viewData = null): void
  {
    if (!empty($viewData)) {
      extract($viewData);
    }
    $viewFile = __DIR__ . "/../View/$view.php";
    require_once $viewFile;
  }
}
