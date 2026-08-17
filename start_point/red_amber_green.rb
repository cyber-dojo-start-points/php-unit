
lambda { |stdout,stderr,status|
  output = stdout + stderr
  # phpunit exits 0 when every test passes, 1 when a test fails, and 2 when a
  # test errors. Reading the status rather than the summary wording keeps the
  # colours right when phpunit rewords its banners, as it does when reporting
  # a deprecation. An empty suite also exits 1, so it is named here to keep it
  # out of red.
  return :amber if /No tests executed/.match(output)
  return :green if status == 0
  return :red   if status == 1
  return :amber
}
